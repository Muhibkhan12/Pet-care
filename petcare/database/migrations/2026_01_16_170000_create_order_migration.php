<?php

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
        Schema::create('orders', function (Blueprint $table) {
    $table->id(); // order id

    $table->foreignId('user_id')
        ->constrained()
        ->onDelete('cascade');

    $table->string('order_number')->unique(); // ORD-2026-0001
    $table->decimal('subtotal', 10, 2);
    $table->decimal('tax', 10, 2)->default(0);
    $table->decimal('shipping_fee', 10, 2)->default(0);
    $table->decimal('total_amount', 10, 2);

    $table->enum('status', [
        'pending',
        'paid',
        'processing',
        'shipped',
        'delivered',
        'cancelled'
    ])->default('pending');

    $table->enum('payment_status', [
        'unpaid',
        'paid',
        'refunded'
    ])->default('unpaid');

    $table->string('payment_method')->nullable(); // cod, stripe, paypal
    $table->timestamp('paid_at')->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_migration');
    }
};
