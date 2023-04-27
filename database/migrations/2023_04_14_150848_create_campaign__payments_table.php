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
        Schema::create('campaign_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_id');
            $table->foreign('campaign_id', 'fk_campaign_payments_campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
            $table->string('bill_name');
            $table->string('bill_email');
            $table->string('bill_phone');
            $table->string('bill_country');
            $table->string('bill_city');
            $table->longText('bill_address');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('postal');
            $table->string('card_type');
            $table->string('card_number')->unique();
            $table->string('cv');
            $table->date('exp_date');
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
        Schema::dropIfExists('campaign__payments');
    }
};
