<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_payment_id')->nullable();
            $table->foreign('campaign_payment_id', 'fk_deals_campaign_payment_id')->references('id')->on('campaign_payments')->onDelete('cascade');
            $table->datetimetz('closing_date');
            $table->string('priority');
            $table->string('stage_deal');
            $table->string('type_deal');
            $table->string('contact');
            $table->string('company');
            $table->unsignedFloat('amount');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
};
