<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventAttendeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_attendees', function (Blueprint $table) {
            $table->integer('id');
            $table->string('registration_id')->nullable()->default(0);
            $table->integer('is_primary')->nullable()->default(0);
            $table->string('lname')->nullable();
            $table->string('fname')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country_id')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('date');
            $table->string('price_option')->nullable();
            $table->decimal('orig_price',20,2)->nullable()->default(0.00);
            $table->decimal('final_price',20,2)->nullable()->default(0.00);
            $table->integer('quantity')->nullable()->default(0);
            $table->decimal('total_cost',20,2)->nullable()->default(0.00);
            $table->decimal('amount_pd',20,2)->nullable()->default(0.00);
            $table->string('coupon_code')->nullable();
            $table->string('payment')->nullable();
            $table->string('payment_status')->nullable()->default('Incomplete');
            $table->string('txn_type')->nullable();
            $table->string('txn_id')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('event_id')->nullable();
            $table->string('event_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('attendee_session')->nullable();
            $table->text('transaction_details')->nullable();
            $table->integer('pre_approve')->nullable()->default(1);
            $table->integer('checked_in')->nullable()->default(0);
            $table->integer('checked_in_quantity')->nullable()->default(0);
            $table->string('hashSalt')->nullable();
            $table->timestamps();

            $table->primary('id');

            //$table->foreign('event_id')->references('source_id')->on('events_detail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_attendees');
    }
}
