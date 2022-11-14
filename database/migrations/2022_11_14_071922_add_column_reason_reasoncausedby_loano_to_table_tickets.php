<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnReasonReasoncausedbyLoanoToTableTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->string('reason')->required()->after('subject');
            $table->string('reasoncausedby', 10)->required()->after('reason');
            $table->string('loano')->required()->after('reasoncausedby');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropColumn('reason');
            $table->dropColumn('reason_caused_by');
            $table->dropColumn('loa_no');
        });
    }
}
