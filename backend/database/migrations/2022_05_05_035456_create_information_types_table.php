
    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateinformationTypesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create("information_types", function (Blueprint $table) {

                $table->increments('id');
                $table->string('name');
                $table->string('comment')->nullable();
                $table->timestamps();



                // ----------------------------------------------------
                // -- SELECT [information_types]--
                // ----------------------------------------------------
                // $query = DB::table("information_types")
                // ->get();
                // dd($query); //For checking



            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists("information_types");
        }
    }
