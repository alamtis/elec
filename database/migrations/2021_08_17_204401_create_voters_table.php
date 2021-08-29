<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voters', function (Blueprint $table) {
            $table->id();
            $table->integer('ord_num')->nullable();
            $table->string('cin');
            $table->string('fname');
            $table->string('lname');
            $table->integer('circle');
            $table->integer('bureau');
            $table->string('bureau_addr')->nullable();
            $table->string('by_user')->nullable();
            $table->foreignId('municipality_id')->constrained();
            $table->string('status');
            $table->integer('status_value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voters');
    }
}
//INSERT INTO voters
//(cin, fname, lname, bureau, circle, municipality_id, status, status_value)
//VALUES
//('BJ190190', 'خدیجة', 'خیا', 1, 1, 3, 'غير محجوز', 0 ),
//('BJ190191', 'فاطمة', 'میارة', 2, 2, 3, 'غير محجوز', 0 ),
//('BJ191191', 'للا اخیارھم', 'تاوبالي', 1, 1, 2, 'غير محجوز', 0 ),
//('BJ191192', 'سیدي محمد', 'ھیبا', 3, 3, 2, 'غير محجوز', 0 ),
//('BJ192190', 'احساین', 'اللھو', 1, 1, 1, 'غير محجوز', 0 ),
//('BJ192192', 'سمیرة', 'فیدود',  2, 1, 1, 'غير محجوز', 0 );
//
//INSERT INTO municipalities
//(name)
//VALUES
//('بوجدور'),
//('الجريفية'),
//('كلتة زمور');
