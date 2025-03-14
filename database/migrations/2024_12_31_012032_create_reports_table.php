<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->date('date'); // Tanggal
            $table->string('activity_name'); // Nama Aktivitas
            $table->decimal('amount', 15, 2); // Jumlah (Rp)
            $table->text('description')->nullable(); // Keterangan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
}
