
    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateUserProfilesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create("user_profiles", function (Blueprint $table) {

                $table->integer('user_id')->nullable()->unsigned();
                $table->integer('user_profile_detail_id')->nullable()->unsigned();
                $table->unique(['user_id', 'user_profile_detail_id']);
                $table->foreign("user_id")->references("id")->on("users");
                $table->foreign("user_profile_detail_id")->references("id")->on("user_profile_details");
                $table->timestamps();



                // ----------------------------------------------------
                // -- SELECT [user_profiles]--
                // ----------------------------------------------------
                // $query = DB::table("user_profiles")
                // ->leftJoin("users","users.id", "=", "user_profiles.user_id")
                // ->leftJoin("user_profile_details","user_profile_details.id", "=", "user_profiles.user_profile_id")
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
            Schema::dropIfExists("user_profiles");
        }
    }
