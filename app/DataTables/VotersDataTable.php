<?php

namespace App\DataTables;

use App\Voter;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class VotersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('municipality_id', function (Voter $voter) {
                return $voter->municipality->name;
            })
            ->editColumn('by_user', function (Voter $voter) {
                if($voter->by_user === null){
                    return $voter->by_user = '-';
                }
                return $voter->by_user;
            })
            ->editColumn('status', function (Voter $voter) {

                if($voter->status_value === 2) {

                    return '<span class="badge bg-success text-white">'. $voter->status .'</span>';

                } elseif ($voter->status_value === 1) {

                    return '<span class="badge bg-danger text-white">'. $voter->status .'</span>';

                } else {

                    return '<span class="badge bg-secondary text-white">'. $voter->status .'</span>';

                }
            })
            ->addColumn('actions', function (Voter $voter) {

                $btnReserved = '<form action="/voters/'.$voter->id.'" method="POST" class="frmReserved">'.csrf_field().''.method_field('PUT').'<input class="status" type="hidden" name="reserved" value="reserved"><button type="submit" class="btn btn-outline-danger btn-sm mx-1">تم الحجز</button></form>';

                $btnVoted = '<form action="/voters/'.$voter->id.'" method="POST" class="frmVoted">'.csrf_field().''.method_field('PUT').'<input class="status" type="hidden" name="voted" value="voted"><button type="submit" class="btn btn-outline-success btn-sm mx-1" class="voted">تم التصويت</button></form>';

                $btnUnreserved = '<form action="/voters/'.$voter->id.'" method="POST" class="frmUnreserved">'.csrf_field().''.method_field('PUT').'<input class="status" type="hidden" name="unreserved" value="unreserved"><button type="submit" class="btn btn-outline-secondary btn-sm mx-1" class="unreserved">غير محجوز</button></form>';

                if(auth()->user()->hasPermissionTo('cadre') && $voter->status_value === 0) {

                    return '<div class="d-flex">'.$btnReserved.'</div>';

                } elseif (auth()->user()->hasPermissionTo('chef_bureau') && $voter->status_value === 1) {

                    return '<div class="d-flex">'.$btnVoted.'</div>';

                } elseif(auth()->user()->can('admin')) {

                    return '<div class="d-flex">'.$btnReserved.' '.$btnVoted.' '.$btnUnreserved.'</div>';

                }
            })
            ->rawColumns(['status', 'actions']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Voter $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Voter $model)
    {
        $user = auth()->user();

        if($user->hasPermissionTo('admin')){

            return $model->query();

        } elseif($user->hasAllPermissions(['cadre', 'boujdour'])) {

            return $model->query()->where('municipality_id', '=', 1);

        } elseif($user->hasAllPermissions(['cadre', 'jrayfia'])) {

            return $model->query()->where('municipality_id', '=', 2);

        } elseif($user->hasAllPermissions(['cadre', 'zemmour'])) {

            return $model->query()->where('municipality_id', '=', 3);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c1'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 1]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour','c2'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 2]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c3'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 3]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c4'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 4]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c5'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 5]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c6'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 6]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c7'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 7]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c7'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 7]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c8'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 8]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c9'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 9]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c10'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 10]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c11'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 11]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c12'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 12]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c13'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 13]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c14'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 14]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c15'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 15]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c16'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 16]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c17'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 17]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c18'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 18]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c19'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 19]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c20'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 20]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c21'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 21]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c22'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 22]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c23'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 23]]);

        } elseif($user->hasAllPermissions(['candidate', 'boujdour', 'c24'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 24]]);

        } elseif($user->hasAllPermissions('candidate', 'boujdour', 'c25')) {

            return $model->query()->where([['municipality_id', 1], ['circle', 25]]);

        } elseif($user->hasAllPermissions('candidate', 'jrayfia', 'c1')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 1]]);

        } elseif($user->hasAllPermissions('candidate', 'jrayfia', 'c2')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 2]]);

        } elseif($user->hasAllPermissions('candidate', 'jrayfia', 'c3')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 3]]);

        } elseif($user->hasAllPermissions('candidate', 'jrayfia', 'c4')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 4]]);

        } elseif($user->hasAllPermissions('candidate', 'jrayfia', 'c5')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 5]]);

        } elseif($user->hasAllPermissions('candidate', 'jrayfia', 'c6')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 6]]);

        } elseif($user->hasAllPermissions('candidate', 'jrayfia', 'c7')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 7]]);

        } elseif($user->hasAllPermissions('candidate', 'jrayfia', 'c8')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 8]]);

        } elseif($user->hasAllPermissions('candidate', 'jrayfia', 'c9')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 9]]);

        } elseif($user->hasAllPermissions('candidate', 'jrayfia', 'c10')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 10]]);

        } elseif($user->hasAllPermissions('candidate', 'jrayfia', 'c11')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 11]]);

        } elseif($user->hasAllPermissions('candidate', 'zemmour', 'c1')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 1]]);

        } elseif($user->hasAllPermissions('candidate', 'zemmour', 'c2')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 2]]);

        } elseif($user->hasAllPermissions('candidate', 'zemmour', 'c3')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 3]]);

        } elseif($user->hasAllPermissions('candidate', 'zemmour', 'c4')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 4]]);

        } elseif($user->hasAllPermissions('candidate', 'zemmour', 'c5')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 5]]);

        } elseif($user->hasAllPermissions('candidate', 'zemmour', 'c6')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 6]]);

        } elseif($user->hasAllPermissions('candidate', 'zemmour', 'c7')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 7]]);

        } elseif($user->hasAllPermissions('candidate', 'zemmour', 'c8')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 8]]);

        } elseif($user->hasAllPermissions('candidate', 'zemmour', 'c9')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 9]]);

        } elseif($user->hasAllPermissions('candidate', 'zemmour', 'c10')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 10]]);

        } elseif($user->hasAllPermissions('candidate', 'zemmour', 'c11')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 11]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c1'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 1]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour','c2'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 2]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c3'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 3]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c4'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 4]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c5'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 5]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c6'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 6]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c7'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 7]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c7'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 7]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c8'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 8]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c9'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 9]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c10'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 10]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c11'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 11]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c12'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 12]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c13'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 13]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c14'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 14]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c15'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 15]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c16'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 16]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c17'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 17]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c18'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 18]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c19'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 19]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c20'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 20]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c21'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 21]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c22'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 22]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c23'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 23]]);

        } elseif($user->hasAllPermissions(['chef_bureau', 'boujdour', 'c24'])) {

            return $model->query()->where([['municipality_id', 1], ['circle', 24]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'boujdour', 'c25')) {

            return $model->query()->where([['municipality_id', 1], ['circle', 25]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'jrayfia', 'c1')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 1]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'jrayfia', 'c2')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 2]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'jrayfia', 'c3')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 3]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'jrayfia', 'c4')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 4]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'jrayfia', 'c5')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 5]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'jrayfia', 'c6')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 6]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'jrayfia', 'c7')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 7]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'jrayfia', 'c8')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 8]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'jrayfia', 'c9')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 9]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'jrayfia', 'c10')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 10]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'jrayfia', 'c11')) {

            return $model->query()->where([['municipality_id', 2], ['circle', 11]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'zemmour', 'c1')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 1]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'zemmour', 'c2')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 2]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'zemmour', 'c3')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 3]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'zemmour', 'c4')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 4]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'zemmour', 'c5')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 5]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'zemmour', 'c6')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 6]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'zemmour', 'c7')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 7]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'zemmour', 'c8')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 8]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'zemmour', 'c9')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 9]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'zemmour', 'c10')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 10]]);

        } elseif($user->hasAllPermissions('chef_bureau', 'zemmour', 'c11')) {

            return $model->query()->where([['municipality_id', 3], ['circle', 11]]);

        }
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('voters-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1, 'asc')
            ->scrollX(true)
            ->buttons([
                'excel',
            ]);

    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ['data' => 'ord_num', 'title' => 'الرقم الترتيبي', 'name' => 'ord_num'],
            ['data' => 'cin', 'title' => 'ب.ت.و', 'name' => 'cin'],
            ['data' => 'fname', 'title' => 'الإسم', 'name' => 'fname'],
            ['data' => 'lname', 'title' => 'النسب', 'name' => 'lname'],
            ['data' => 'municipality_id', 'title' => 'الجماعة', 'name' => 'municipality_id'],
            ['data' => 'circle', 'title' => 'الدائرة', 'name' => 'circle', 'serachable' => false],
            ['data' => 'bureau', 'title' => 'المكتب', 'name' => 'bureau', 'serachable' => false],
            // ['data' => 'bureau_addr', 'title' => 'مكتب التصويت', 'name' => 'bureau_addr'],
            ['data' => 'status', 'title' => 'الحالة', 'name' => 'status', 'serachable' => false],
            ['data' => 'by_user', 'title' => 'المؤطر', 'name' => 'by_user', 'serachable' => false],
            ['data' => 'actions', 'title' => 'الحدث', 'name' => 'actions', 'orderable' => false, 'serachable' => false, 'exportable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Voters_' . date('YmdHis');
    }
}
