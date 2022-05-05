
    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateUserinformationDetailsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create("user_information_details", function (Blueprint $table) {

                $table->increments('id');
                $table->string('value');
                $table->integer('information_type_id')->nullable()->unsigned();
                $table->string('comment')->nullable();


                //*********************************
                // Foreign KEY [ Uncomment if you want to use!! ]
                //*********************************
                $table->foreign("information_type_id")->references("id")->on("information_types");



                // ----------------------------------------------------
                // -- SELECT [user_information_details]--
                // ----------------------------------------------------
                // $query = DB::table("user_information_details")
                // ->leftJoin("information_types","information_types.id", "=", "user_information_details.information_type_id")
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
            Schema::dropIfExists("user_information_details");
        }
    }
