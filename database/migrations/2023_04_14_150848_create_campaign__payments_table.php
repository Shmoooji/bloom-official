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
            $table->string('payment_id')->primary();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('campaign_id')->constrained();
            $table->string('payment_method');
            $table->integer('subscription_period');
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
