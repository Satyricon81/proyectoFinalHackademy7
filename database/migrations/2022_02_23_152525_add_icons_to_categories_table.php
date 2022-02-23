<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('icon')->default('fa-solid fa-basket-shopping')->after('name');
        });
        
        $categories = ['Motor', 'Deportes', 'Moda Y Accesorios', 'Libros', 'Juguetes', 'Videojuegos', 'Electronica', 'Inmobiliaria'];
        
        $icons = ["fa-solid fa-car", "fa-solid fa-football", "fa-solid fa-shirt", "fa-solid fa-book", "fa-solid fa-teddy-bear", "fa-solid fa-alien-8bit", "fa-solid fa-computer-classic", "fa-solid fa-house-building"];
        
        foreach (Category::all() as $position=>$category) {
            $category->icon = $icons[$position];
            $category->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
    }
};
