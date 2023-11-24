<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_kycs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('business_name')->nullable();
            $table->string('business_mobile')->nullable();
            $table->string('business_email')->nullable();
            $table->string('business_type')->nullable();
            $table->string('business_entity')->nullable();
            $table->string('business_category')->nullable();
            $table->string('gst_no')->nullable();
            $table->string('business_desc')->nullable();
            $table->string('udyog_aadhar')->nullable();
            $table->string('shop_no')->nullable();
            $table->string('website_url')->nullable();
            $table->string('street_no')->nullable();
            $table->string('pincode')->nullable();
            $table->string('states')->nullable();
            $table->integer('district')->nullable();
            $table->integer('city')->nullable();
            $table->string('pan_img')->nullable();
            $table->string('certification_incorporation')->nullable();
            $table->string('gst_reg_img')->nullable();
            $table->string('director_name')->nullable();
            $table->string('authority_mobile')->nullable();
            $table->string('authority_email')->nullable();
            $table->string('partner_pan')->nullable();
            $table->string('address_proof')->nullable();
            $table->string('other_business_cat')->nullable();
            $table->string('address_proof_front')->nullable();
            $table->string('address_proof_back')->nullable();
            $table->string('approval_status')->default(0)->comment('0:none,1:pending,2:approved,3:rejected');
            $table->string('admin_kyc_onboarding')->default(1)->comment('1:on,2:off');
            $table->string('approval_id')->nullable();
            $table->string('approval_name')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate(DB::raw('current_timestamp()'))->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_kycs');
    }
};
