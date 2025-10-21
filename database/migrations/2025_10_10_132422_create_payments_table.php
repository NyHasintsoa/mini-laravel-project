<?php

use App\Models\Enum\PaymentCurrency;
use App\Models\Enum\PaymentMethod;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table): void {
            $table->id();

            $table->string('phone');
            $table->double('amount');
            $table->string('full_name');
            $table->string('address');
            $table->string('city');
            $table->string('message');
            $table->enum('method', PaymentMethod::values())->default(PaymentMethod::MVOLA);
            $table->enum('currency', PaymentCurrency::values())->default(PaymentCurrency::AR);
            $table->string('decision');
            $table->string('customer_ip_address');
            $table->string('transaction_type');
            $table->string('reference_number');
            $table->string('transaction_id');

            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            $table->datetime('payed_at');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
