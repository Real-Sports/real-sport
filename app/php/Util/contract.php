<?php 

    //error_reporting(0);

    class Sport_Contract{
        //Table name
        public static $table_name="sport";

        //Column names
        public static $id="id";

        public static $sport="sport";

        public static function get_columns(){
            return array(Sport_Contract::$sport);
        }
    }

    class Product_Contract{
        //Table name
        public static $table_name="product";
        
        //Column names
        public static $id="id";

        public static $image_1="image_1";
        public static $image_2="image_2";
        public static $image_3="image_3";
        public static $image_4="image_4";

        public static $name="name";
        public static $description="description";

        public static $original_price="original_price";
        public static $sale_price="sale_price";

        public static $sport_id="sport_id";

        public static function get_columns(){
            return array(Product_Contract::$image_1,Product_Contract::$image_2,Product_Contract::$image_3,Product_Contract::$image_4,
                Product_Contract::$name,Product_Contract::$description,Product_Contract::$category,Product_Contract::$original_price,
                Product_Contract::$sale_price,Product_Contract::$sport_id);
        }
    }

    class Accessories_Contract{
        //Table Name
        public static $table_name="accessories";

        //Column names
        public static $id="id";

        public static $accessory_1="accessory_1";
        public static $accessory_2="accessory_2";
        public static $accessory_3="accessory_3";
        public static $accessory_4="accessory_4";
        public static $accessory_5="accessory_5";
        public static $accessory_6="accessory_6";
        public static $accessory_7="accessory_7";
        public static $accessory_8="accessory_8";
        public static $accessory_9="accessory_9";
        public static $accessory_10="accessory_10";

        public static $facility_1="facility_1";
        public static $facility_2="facility_2";
        public static $facility_3="facility_3";
        public static $facility_4="facility_4";
        public static $facility_5="facility_5";

        public static $stadium_id="sport_id";

        public static function get_columns(){
            return array(
                //accessories
                Accessories_Contract::$category,Accessories_Contract::$accessory_1,Accessories_Contract::$accessory_2,
                Accessories_Contract::$accessory_3,Accessories_Contract::$accessory_4,Accessories_Contract::$accessory_5,
                Accessories_Contract::$accessory_6,Accessories_Contract::$accessory_7,Accessories_Contract::$accessory_8,
                Accessories_Contract::$accessory_9,Accessories_Contract::$accessory_10,
                //facilities
                Accessories_Contract::$facility_1,Accessories_Contract::$facility_2,Accessories_Contract::$facility_3,Accessories_Contract::$facility_4,
                Accessories_Contract::$facility_5,
                //Foreign Key
                Accessories_Contract::$stadium_id
            );
        }
    }

    class User_Contract{
        //Table name
        public static $table_name="users";

        //Column names
        public static $id="id";

        public static $image="image";
        public static $name="name";
        public static $phone_number="phone_number";
        public static $email="email";

        public static function get_columns(){
            return array(User_Contract::$image,User_Contract::$name,User_Contract::$phone_number,User_Contract::$email);
        }
    }

    class Stadium_Contract{
        //Table name
        public static $table_name="stadium";

        //Column names
        public static $id="id";

        public static $image_1="image_1";
        public static $image_2="image_2";
        public static $image_3="image_3";

        public static $name="name";

        public static $door_number="door_number";
        public static $area="area";
        public static $landmark="landmark";
        public static $city="city";
        public static $pincode="pincode";

        public static $type="type";

        public static $timing_open="timing_open";
        public static $timing_close="timing_close";

        public static $pay_per_hour="pay_per_hour";
        public static $pay_per_day="pay_per_day";

        public static $account_status="account_status";

        public static $user_id="user_id";
        public static $sport_id="sport_id";

        public static function get_columns(){
            return array(
                //images
                Stadium_Contract::$image_1,Stadium_Contract::$image_2,Stadium_Contract::$image_3,
                //Address
                Stadium_Contract::$name,Stadium_Contract::$door_number,Stadium_Contract::$area,Stadium_Contract::$landmark,Stadium_Contract::$city,Stadium_Contract::$pincode,
                //Type
                Stadium_Contract::$type,
                //Timing
                Stadium_Contract::$timing_open,Stadium_Contract::$timing_close,
                //Pay
                Stadium_Contract::$pay_per_hour,Stadium_Contract::$pay_per_day,
                //Status
                Stadium_Contract::$account_status,
                //Foregin key
                Stadium_Contract::$user_id,Stadium_Contract::$sport_id
            );
        }
    }

    class Stadium_Accessories_Contract{
        //Table Name
        public static $table_name="stadium_accessories";

        //Column names
        public static $id="id";

        public static $accessory_1="accessory_1";
        public static $accessory_2="accessory_2";
        public static $accessory_3="accessory_3";
        public static $accessory_4="accessory_4";
        public static $accessory_5="accessory_5";
        public static $accessory_6="accessory_6";
        public static $accessory_7="accessory_7";
        public static $accessory_8="accessory_8";
        public static $accessory_9="accessory_9";
        public static $accessory_10="accessory_10";

        public static $facility_1="facility_1";
        public static $facility_2="facility_2";
        public static $facility_3="facility_3";
        public static $facility_4="facility_4";
        public static $facility_5="facility_5";

        public static $stadium_id="stadium_id";
        public static $accessories_id="accessories_id";

        public static function get_columns(){
            return array(
                //accessories
                Stadium_Accessories_Contract::$accessory_1,Stadium_Accessories_Contract::$accessory_2,
                Stadium_Accessories_Contract::$accessory_3,Stadium_Accessories_Contract::$accessory_4,Stadium_Accessories_Contract::$accessory_5,
                Stadium_Accessories_Contract::$accessory_6,Stadium_Accessories_Contract::$accessory_7,Stadium_Accessories_Contract::$accessory_8,
                Stadium_Accessories_Contract::$accessory_9,Stadium_Accessories_Contract::$accessory_10,
                //facilities
                Stadium_Accessories_Contract::$facility_1,Stadium_Accessories_Contract::$facility_2,Stadium_Accessories_Contract::$facility_3,Stadium_Accessories_Contract::$facility_4,
                Stadium_Accessories_Contract::$facility_5,
                //Foreign Key
                Stadium_Accessories_Contract::$stadium_id,
                Stadium_Accessories_Contract::$accessories_id
            );
        }
    }

    class Tournament_Contract{
        //Table Name
        public static $table_name="tournament";

        //Column names
        public static $id="id";

        public static $image="image";
        public static $name="name";
        public static $description="description";
        public static $location="location";

        public static $date="tournament_date";

        public static $timing_start="timing_start";
        public static $timing_end="timing_end";

        public static $entry_fee="entry_fee";
        
        public static $winning_price_1="winning_price_1";
        public static $winning_price_2="winning_price_2";
        public static $winning_price_3="winning_price_3";

        public static $account_status="account_status";

        public static $sport_id="sport_id";
        public static $user_id="user_id";

        public static function get_columns(){
            return array(
                Tournament_Contract::$image,Tournament_Contract::$name,Tournament_Contract::$description,Tournament_Contract::$location,
                Tournament_Contract::$date,
                Tournament_Contract::$timing_start,Tournament_Contract::$timing_end,
                Tournament_Contract::$entry_fee,
                Tournament_Contract::$winning_price_1,Tournament_Contract::$winning_price_2,Tournament_Contract::$winning_price_3,
                Tournament_Contract::$account_status,
                Tournament_Contract::$sport_id,Tournament_Contract::$user_id
            );
        }
    }

    class Premium_Contract{
        //Table name
        public static $table_name="premium";

        //Column names
        public static $id="id";

        public static $tournament_id="tournament_id";

        public static function get_columns(){
            return array(Premium_Contract::$tournament_id);
        }
    }

?>