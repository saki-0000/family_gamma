
    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateProfileTypesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create("profile_types", function (Blueprint $table) {

                $table->increments('id');
                $table->string('name');
                $table->string('comment')->nullable();
                $table->timestamps();



                // ----------------------------------------------------
                // -- SELECT [profile_types]--
                // ----------------------------------------------------
                // $query = DB::table("profile_types")
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
            Schema::dropIfExists("profile_types");
        }
    }
