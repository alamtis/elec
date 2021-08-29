<?php

namespace App\Http\Controllers;

use App\Voter;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->hasAnyPermission(['admin', 'candidate', 'chef_bureau'])) {

            $votersCount = Voter::count();
            $votersVoted = Voter::where('status_value', 2)->count();
            $votersReserved = Voter::where('status_value', 1)->count();
            $votersBjdrVoted = Voter::where([['status_value', 2], ['municipality_id', 1]])->count();
            $votersJrfVoted = Voter::where([['status_value', 2], ['municipality_id', 2]])->count();
            $votersZmrVoted = Voter::where([['status_value', 2], ['municipality_id', 3]])->count();
            $votersVoted_1 = Voter::where([['status_value', 2], ['municipality_id', 1]])->whereIn('circle', [23, 24, 25])->count();
            $votersVoted_2 = Voter::where([['status_value', 2], ['municipality_id', 1]])->whereIn('circle', [12, 13, 14, 15])->count();
            $votersVoted_3 = Voter::where([['status_value', 2], ['municipality_id', 1]])->whereIn('circle', [3, 4, 5])->count();
            $votersVoted_4 = Voter::where([['status_value', 2], ['municipality_id', 1]])->whereIn('circle', [10, 11, 6, 9])->count();
            $votersVoted_5 = Voter::where([['status_value', 2], ['municipality_id', 1]])->whereIn('circle', [18, 17, 16, 8])->count();
            $votersVoted_6 = Voter::where([['status_value', 2], ['municipality_id', 1]])->whereIn('circle', [21, 22])->count();
            $votersVoted_7 = Voter::where([['status_value', 2], ['municipality_id', 1]])->whereIn('circle', [19, 20])->count();
            $votersVoted_8 = Voter::where([['status_value', 2], ['municipality_id', 1]])->whereIn('circle', [1, 2, 7])->count();

            $votersVotedJrf_1 = Voter::where([['status_value', 2], ['municipality_id', 2], ['circle', 1]])->count();
            $votersVotedJrf_2 = Voter::where([['status_value', 2], ['municipality_id', 2], ['circle', 2]])->count();
            $votersVotedJrf_3 = Voter::where([['status_value', 2], ['municipality_id', 2], ['circle', 3]])->count();
            $votersVotedJrf_4 = Voter::where([['status_value', 2], ['municipality_id', 2], ['circle', 4]])->count();
            $votersVotedJrf_5 = Voter::where([['status_value', 2], ['municipality_id', 2], ['circle', 5]])->count();
            $votersVotedJrf_6 = Voter::where([['status_value', 2], ['municipality_id', 2], ['circle', 6]])->count();
            $votersVotedJrf_7 = Voter::where([['status_value', 2], ['municipality_id', 2], ['circle', 7]])->count();
            $votersVotedJrf_8 = Voter::where([['status_value', 2], ['municipality_id', 2], ['circle', 8]])->count();
            $votersVotedJrf_9 = Voter::where([['status_value', 2], ['municipality_id', 2], ['circle', 9]])->count();
            $votersVotedJrf_10 = Voter::where([['status_value', 2], ['municipality_id', 2], ['circle', 10]])->count();
            $votersVotedJrf_11 = Voter::where([['status_value', 2], ['municipality_id', 2], ['circle', 11]])->count();

            $votersVotedZmr_1 = Voter::where([['status_value', 2], ['municipality_id', 3], ['circle', 1]])->count();
            $votersVotedZmr_2 = Voter::where([['status_value', 2], ['municipality_id', 3], ['circle', 2]])->count();
            $votersVotedZmr_3 = Voter::where([['status_value', 2], ['municipality_id', 3], ['circle', 3]])->count();
            $votersVotedZmr_4 = Voter::where([['status_value', 2], ['municipality_id', 3], ['circle', 4]])->count();
            $votersVotedZmr_5 = Voter::where([['status_value', 2], ['municipality_id', 3], ['circle', 5]])->count();
            $votersVotedZmr_6 = Voter::where([['status_value', 2], ['municipality_id', 3], ['circle', 6]])->count();
            $votersVotedZmr_7 = Voter::where([['status_value', 2], ['municipality_id', 3], ['circle', 7]])->count();
            $votersVotedZmr_8 = Voter::where([['status_value', 2], ['municipality_id', 3], ['circle', 8]])->count();
            $votersVotedZmr_9 = Voter::where([['status_value', 2], ['municipality_id', 3], ['circle', 9]])->count();
            $votersVotedZmr_10 = Voter::where([['status_value', 2], ['municipality_id', 3], ['circle', 10]])->count();
            $votersVotedZmr_11 = Voter::where([['status_value', 2], ['municipality_id', 3], ['circle', 11]])->count();

            return view(
                'statistics.index',
                compact(
                    'votersCount',
                    'votersVoted',
                    'votersReserved',
                    'votersBjdrVoted',
                    'votersJrfVoted',
                    'votersZmrVoted',
                    'votersVoted_1',
                    'votersVoted_2',
                    'votersVoted_3',
                    'votersVoted_4',
                    'votersVoted_5',
                    'votersVoted_6',
                    'votersVoted_7',
                    'votersVoted_8',
                    'votersVotedJrf_1',
                    'votersVotedJrf_2',
                    'votersVotedJrf_3',
                    'votersVotedJrf_4',
                    'votersVotedJrf_5',
                    'votersVotedJrf_6',
                    'votersVotedJrf_7',
                    'votersVotedJrf_8',
                    'votersVotedJrf_9',
                    'votersVotedJrf_10',
                    'votersVotedJrf_11',
                    'votersVotedZmr_1',
                    'votersVotedZmr_2',
                    'votersVotedZmr_3',
                    'votersVotedZmr_4',
                    'votersVotedZmr_5',
                    'votersVotedZmr_6',
                    'votersVotedZmr_7',
                    'votersVotedZmr_8',
                    'votersVotedZmr_9',
                    'votersVotedZmr_10',
                    'votersVotedZmr_11'
                )
            );
        } else {
           return redirect()->route('voters.index');
        }
    }
}
