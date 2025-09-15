<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên thuốc
            $table->string('product_code')->unique(); // Mã san phẩm
            $table->text('ingredients')->nullable(); // Thành phần
            $table->date('expiration_date'); // Hạn sử dụng
            $table->string('manufacturer'); // Nhà sản xuất
            $table->decimal('price', 10, 2); // Giá thuốc
            $table->foreignId('supplier_id')->constrained()->onDelete('cascade'); // Liên kết nhà cung cấp
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('drugs');
    }
};
