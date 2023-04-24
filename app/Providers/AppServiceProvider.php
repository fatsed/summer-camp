<?php

//use App\Models\User;

namespace App\Providers;

use App\Models\About;
use App\Models\Activite;
use App\Models\Akhbar;
use App\Models\Article;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Gender;
use App\Models\Order;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Tourguide;
//use App\Models\User;
use App\Models\User;
use App\Models\vacation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//
//        //user
//        $names=[
//            'admin',
//            'editor',
//            'sara',
//            'ali',
//            'mari',
//            'parisa',
//            'saman',
//        ];
//        $families=[
//            '1',
//            '1',
//            'john',
//            'slight',
//            'manila',
//            'paparazzi',
//            'amass',
//        ];
//        $genderNames=[
//            'Female',
//            'male',
//            'Female',
//            'male',
//            'Female',
//            'Female',
//            'male'
//        ];
//        $pictures=[
//            '/uploads/images/1178244825',
//            '/uploads/images/9022490557',
//            '/uploads/images/9022490557',
//            '/uploads/images/9022490557',
//            '/uploads/images/1178244825',
//            '/uploads/images/9022490557',
//            '/uploads/images/7197994001',
//        ];
//        $addresses=[
//            '8518 Pin Oak Dr.',
//            '8518 Pin Oak Dr.',
//            '9662 North New Saddle Lane',
//            '879 Catherine St.',
//            '45 South Fulton Street',
//            '7 Primrose Dr',
//            '52 North Pacific Ave',
//            'Canal Winchester, OH 43110'
//        ];
//        $ages=[
//            22,
//            33,
//            35,
//            24,
//            57,
//            35,
//            65
//        ];
//        $phones=[
//            9692217417,
//            2693067591,
//            2462396556,
//            5363277553,
//            3945208598,
//            4645979780,
//            5564607679,
//        ];
//        $emails=[
//            'campsummer724@gmail.com',
//            'admin1sum@gmail.com',
//            'editor2421@gmail.com',
//            'sara23232@gmail.com',
//            'ali3232@gmail.com',
//            'mari2342@gmail.com',
//            'parisa1354@gmail.com',
//            'saman2424@gmail.com',
//        ];
//        $passwords=[
//            'fatsed1717ill',
//            'admins-um1',
//            'editor2421',
//            'sra3232',
//            'ali3232',
//            'mari3232',
//            'parisa1354',
//            'saman2453'
//
//        ];
//        $isActives=[
//            0,
//            0,
//            0,
//            0,
//            0,
//            0,
//            0,
//            0
//        ];
//        $is_superuser=[
//            1,
//            0,
//            0,
//            0,
//            0,
//            0,
//            0
//        ];
//        $is_staff=[
//            1,
//            1,
//            1,
//            0,
//            0,
//            0,
//            0
//        ];
//        for ($i = 0; $i < count($names); $i++) {
//
//            $val_phone = User::where("phone",$phones[$i])->first();
//            $val_email = User::where("email",$emails[$i])->first();
//
//
//            if ($val_email != null || $val_phone != null) {
//                continue;
//            }
//
//            User::create([
//                'name' => $names[$i],
//                'family' => $families[$i],
//                'genderName' => $genderNames[$i],
//                'picture' => $pictures[$i],
//                'address' => $addresses[$i],
//                'age' => $ages[$i],
//                'phone' => $phones[$i],
//                'email' => $emails[$i],
//                'password' => Hash::make($passwords[$i]),
//                'is_superuser' => $is_superuser[$i],
//                'is_staff' => $is_staff[$i],
//
//            ]);
//
//        }
//        // about
//         $about1 = About::all('email')->where('email', '=', 'SUMMERCAMP34@gmail.com')->first();
//         if (is_null($about1)) {
//                About::create([
//                    'Name' => 'title',
//                    'address' => '8927 Alderwood Street Montgomery Village, MD 20886',
//                    'email'=>'SUMMERCAMP34@gmail.com',
//                    'numberUs' => '+1 5589 55488 55',
//                    'text' => 'Ullamco laboris nisi ',
//                    'picture' => '/uploads/abouts/1178244825',
//                ]);
//            }
//
//         //news
//        $titles=[
//            'title1',
//            'title2',
//            'title3',
//            'title4',
//            'title5',
//            'title6',
//            'title7',
//        ];
//        $images=[
//            '/uploads/news/1327359560',
//            '/uploads/news/1800013530',
//            '/uploads/news/3730771749',
//            '/uploads/news/4005778455',
//            '/uploads/news/4388926272',
//            '/uploads/news/4762166046',
//            '/uploads/news/5506485079',
//        ];
//        $writers=[
//            'kaveh',
//            'mehran',
//            'diana',
//            'arsalan',
//            'shaghayegh',
//            'maryam',
//            'mahdi',
//        ];
//        $UploadTimes=[
//            '2023-03-22',
//            '2023-04-05',
//            '2023-04-08',
//            '2023-02-27',
//            '2023-20-24',
//            '2023-23-25',
//            '2023-12-13',
//        ];
//        $References=[
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//        ];
//        for ($i = 0; $i < count($titles); $i++) {
//
//            $val_Title= Akhbar::where("Title",$titles[$i])->first();
//
//            if ($val_Title != null) {
//                continue;
//            }
//
//            Akhbar::create([
//                'Title' => $titles[$i],
//                'img' => $images[$i],
//                'writer' => $writers[$i],
//                'UploadTime' => $UploadTimes[$i],
//                'Reference' => $References[$i],
//            ]);
//
//        }
//
//
//        //article
//
//        $ArticlePictures=[
//            '/uploads/article/1014790757',
//            '/uploads/article/3714987201',
//            '/uploads/article/1014790757',
//            '/uploads/article/3714987201',
//            '/uploads/article/1014790757',
//            '/uploads/article/3714987201',
//            '/uploads/article/1014790757',
//        ];
//
//        $Titles=[
//            'title1',
//            'title2',
//            'title3',
//            'title4',
//            'title5',
//            'title6',
//            'title7',
//        ];
//        $abstract=[
//            '“OBJECTIVE: The role of antibiotic therapy in managing acute bacterial sinusitis (ABS) in children is controversial',
//            'Today the fast development in digital technology had a profound impact on art as well.',
//            'The new software features offer endless opportunities.',
//            'Some of the names are not abstract artists.',
//            'that humanity made its first artistic trials exactly with figurative, but abstract pictures.',
//            'In technical terms abstract means to separate or extract something from something else.',
//            'difficult not to find a favorite one.',
//        ];
//        $TEXTS=[
//            '“OBJECTIVE: The role of antibiotic therapy in managing acute bacterial sinusitis (ABS) in children is controversial. The purpose of this study was to determine the effectiveness of high-dose amoxicillin/potassium clavulanate in the treatment of children diagnosed with ABS.',
//            'Today the fast development in digital technology had a profound impact on art as well. Not only in the advertising world creators started to work with digital tools, but also other art types can emerge through the click of the mouse. Software and apps allow artists to create in the digital realm with ease.',
//            'The new software features offer endless opportunities. The software is key in digital abstract art. Even when mixing the digital with traditional painting, sculpture, or photography, artists need software to create the art piece. And imagine that printing technologies allow us to transfer an art piece to new objects. This idea is key in our work at HINSA. We try to take art off the wall and bring it into the everyday life of people',
//            'Some of the names are not abstract artists. The art of Mandy Jurgens, Irina French, Jeszika LeVie, Dan Volbert, Bareth Frymire, and others are rather comic books style artists, people love their digital art. They create a beautiful reality only the human mind can do.',
//            'that humanity made its first artistic trials exactly with figurative, but abstract pictures. The 21st century made another step into the deep abstract sea of opportunities with the technical opportunities of the new technologies and the online art space. So today we see a new boom of offers.',
//            'In technical terms abstract means to separate or extract something from something else. Abstract art can be based on an object, figure, or landscape, where forms have been simplified or schematized or are not even recognizable.',
//            'Looking into the online space of Saatchi Art in the Abstract Digital Art section one finds over 7000 offerings – difficult not to find a favorite one.',
//        ];
//        $times=[
//            '16:13:00',
//            '16:13:00',
//            '16:13:00',
//            '16:13:00',
//            '16:13:00',
//            '16:13:00',
//            '16:13:00',
//        ];
//        $writerArticles=[
//            'kaveh',
//            'mehran',
//            'diana',
//            'arsalan',
//            'shaghayegh',
//            'maryam',
//            'mahdi',
//        ];
//
//        $sources=[
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//            'https://www.youtube.com/watch?v=4cZTKFMObdw',
//        ];
//        for ($i = 0; $i < count($Titles); $i++) {
//
//            $val_TitleS= Article::where("title",$Titles[$i])->first();
//
//            if ($val_TitleS != null) {
//                continue;
//            }
//
//            Article::create([
//                'ArticlePicture' => $ArticlePictures[$i],
//                'title' => $Titles[$i],
//                'abstract' => $abstract[$i],
//                'text' => $TEXTS[$i],
//                'time' => $times[$i],
//                'writer' => $writerArticles[$i],
//                'source' => $sources[$i],
//
//            ]);
//
//        }
//
//
//        //order
//        $UserId=[
//            '1',
//            '2',
//            '3',
//            '4',
//            '5',
//            '6',
//            '7',
//        ];
//        $TravelId=[
//            '1',
//            '2',
//            '3',
//            '4',
//            '5',
//            '6',
//            '7',
//        ];
//        $genderName=[
//            'Female',
//            'male',
//            'Female',
//            'male',
//            'Female',
//            'Female',
//            'male'
//        ];
//        $price=[
//            200000,
//            134565,
//            44652224,
//            4000000,
//            6000000,
//            6753000,
//            5933333,
//        ];
//        $tracking_code=[
//            'vnbnmbmbmbmbbmbnvnv',
//            'dffhgjdcnhmbcnvnvn',
//            'dfhfhfgddgfhfhfhfh',
//            'gfffhfhfhfhfhgdddgd',
//            'ggdddgssddvcgdsgdsg',
//            'dkjgdhgdhgdscnvngdn',
//            'dfdfdsfdsfsfssfdsfd',
//        ];
//
//        for ($i = 0; $i < count($UserId); $i++) {
//
//            $val_tracking_code= Order::where("tracking_code",$tracking_code[$i])->first();
//
//            if ($val_tracking_code != null) {
//                continue;
//            }
//
//            Order::create([
//                'UserId' => $UserId[$i],
//                'TravelId' => $TravelId[$i],
//                'genderName' => $genderName[$i],
//                'price' => $price[$i],
//                'tracking_code' => $tracking_code[$i],
//            ]);
//
//        }
//
//
//        //tour guide
//
//         $TourGuideName=[
//            'kaveh',
//            'mehran',
//            'diana',
//            'arsalan',
//            'shaghayegh',
//            'maryam',
//            'mahdi',
//         ];
//        $TourGuideFamily=[
//            'soltani',
//            'mastani',
//            'rezayi',
//            'ahmadi',
//            'samadi',
//            'momeni',
//            'karimi',
//        ];
//        $TourGuideImg=[
//          '/uploads/tour_guide/1155988352',
//           '/uploads/tour_guide/3078547225',
//           '/uploads/tour_guide/6643365699',
//           '/uploads/tour_guide/9190165969',
//           '/uploads/tour_guide/1155988352',
//           '/uploads/tour_guide/3078547225',
//           '/uploads/tour_guide/9190165969',
//        ];
//        $TourGuideAddress=[
//            '8518 Pin Oak Dr.',
//            '9662 North New Saddle Lane',
//            '879 Catherine St.',
//            '45 South Fulton Street',
//            '7 Primrose Dr',
//            '52 North Pacific Ave',
//            'Canal Winchester, OH 43110'
//        ];
//        $tourGuideText=[
//            'Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate',
//            'Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate',
//            'Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate',
//            'Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate',
//            'Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate',
//            'Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate',
//            'Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate',
//        ];
//        $TourGuideEmail=[
//          'kavehmastanii23@gmail.com',
//           'mehransoltani23@gmail.com',
//           'dianarezayietye353@gmail.com',
//           'arsalanahmadi5234@gmail.com',
//           'shaghayeghsamadi24@gmail.com',
//           'maryammomeni343@gmail.com',
//           'mahdikarimi056@gmail.com'
//        ];
//        $genderName_tourGuide=[
//            'Female',
//            'male',
//            'Female',
//            'male',
//            'Female',
//            'Female',
//            'male'
//        ];
//        $TourGuideAge=[
//            22,
//            53,
//            21,
//            17,
//            33,
//            34,
//            45,
//        ];
//        for ($i = 0; $i < count($TourGuideName); $i++) {
//
//            $val_TourGuideEmail= Tourguide::where("TourGuideEmail",$TourGuideEmail[$i])->first();
//
//            if ($val_TourGuideEmail != null) {
//                continue;
//            }
//
//            Tourguide::create([
//                'TourGuideName' => $TourGuideName[$i],
//                'TourGuideFamily' => $TourGuideFamily[$i],
//                'TourGuideImg' => $TourGuideImg[$i],
//                'TourGuideAddress' => $TourGuideAddress[$i],
//                'text'=>$tourGuideText[$i],
//                'TourGuideEmail' => $TourGuideEmail[$i],
//                'genderName' => $genderName_tourGuide[$i],
//                'TourGuideAge' => $TourGuideAge[$i],
//            ]);
//
//        }
//
//        //vacation
//
//        $name_vacation=[
//            'Magnam Tiste',
//            'Aut Luia',
//            'Est Eligendi',
//            'Eos Luibusdam',
//            'Laboriosam Direva',
//            'Magnam Tistecc',
//            'Eos Luibusdamcvc',
//        ];
//        $TravelAddress=[
//            'Magnam TisteLorem, deren, trataro, filede, nerada',
//            'Aut LuiaLorem, deren, trataro, filede, nerada',
//            'Est EligendiLorem, deren, trataro, filede, nerada',
//            'Eos LuibusdamLorem, deren, trataro, filede, nerada',
//            'Laboriosam DirevaLorem, deren, trataro, filede, nerada',
//            'Magnam TisteccLorem, deren, trataro, filede, nerada',
//            'Eos LuibusdamcvcLorem, deren, trataro, filede, nerada',
//        ];
//        $price=[
//            '200',
//            '3300',
//            '500',
//            '400',
//            '600',
//            '440',
//            '3900',
//        ];
//        $discount_trip=[
//            2,
//            12,
//            10,
//            30,
//            45,
//            5,
//            7,
//        ];
//        $it_takes_day=[
//            23,
//            12,
//            10,
//            30,
//            45,
//            5,
//            7,
//        ];
//        $departure_date=[
//            '2023-02-22',
//            '2023-02-22',
//            '2023-02-22',
//            '2023-02-22',
//            '2023-02-22',
//            '2023-02-22',
//            '2023-02-22',
//        ];
//        $TravelPicture=[
//            '/uploads/travels/5046735222',
//            '/uploads/travels/8927804757',
//            '/uploads/travels/5046735222',
//            '/uploads/travels/8927804757',
//            '/uploads/travels/5046735222',
//            '/uploads/travels/8927804757',
//            '/uploads/travels/5046735222',
//        ];
//
//        for ($i = 0; $i < count($name_vacation); $i++) {
//
//            $val_TravelAddress= vacation::where("TravelAddress",$TravelAddress[$i])->first();
//
//            if ($val_TravelAddress != null) {
//                continue;
//            }
//
//            vacation::create([
//                'title' => $name_vacation[$i],
//                'TravelAddress' => $TravelAddress[$i],
//                'price' => $price[$i],
//                'discount_trip' => $discount_trip[$i],
//                'it_takes_day' => $it_takes_day[$i],
//                'departure_date' => $departure_date[$i],
//                'TravelPicture' => $TravelPicture[$i],
//            ]);
//
//        }
//
//
//        //activities
//        $textActivities=[
//            'Participation in organized sports during childhood and adolescence has important benefits for physical, psychological, and social health. Sport-based youth development programs promote a wide range of learning and life skill development.',
//            'Painting, sculpture and architecture, music, theater, film, dance, and other performing arts, as well as literature and other media such as interactive media, are what our art activities include.',
//            'Nowadays a lot of children struggle with the fear of swimming, yet the activity is essential for life. Our water activities held by professionals will help them overcome it.',
//            'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip',
//            'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt',
//            'Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.',
//            'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.'
//
//        ];
//        $pictureActivities=[
//            '/uploads/activities/2604109207',
//            '/uploads/activities/6949094673',
//            '/uploads/activities/8834507198',
//            '/uploads/activities/2604109207',
//            '/uploads/activities/6949094673',
//            '/uploads/activities/8834507198',
//            '/uploads/activities/6949094673',
//        ];
//        for ($i = 0; $i < count($textActivities); $i++) {
//
//            $val_textActivities= Activite::where("text",$textActivities[$i])->first();
//
//            if ($val_textActivities != null) {
//                continue;
//            }
//
//            Activite::create([
//                'text' => $textActivities[$i],
//                'picture' => $pictureActivities[$i],
//            ]);
//
//        }
//        //EVENT
//        $picture=[
//            '/uploads/event/2490234566',
//            '/uploads/event/7144630485',
//            '/uploads/event/7940197020',
//            '/uploads/event/2490234566',
//            '/uploads/event/7144630485',
//            '/uploads/event/7940197020',
//            '/uploads/event/2490234566',
//        ];
//        $title=[
//            '10 day to help',
//            'birthday parties',
//            '10 day',
//            '10 day to help',
//            'birthday parties',
//            '10 day',
//            '10 day to help',
//        ];
//        $priceEvent=[
//            200,
//            3300,
//            500,
//            400,
//            600,
//            440,
//            3900,
//        ];
//        $textEvent=[
//            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.1',
//            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.3',
//            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.2',
//            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.4',
//            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.5',
//            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.6',
//            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.7',
//        ];
//
//        for ($i = 0; $i < count($textEvent); $i++) {
//
//            $val_textEvenT= Event::where("text",$textEvent[$i])->first();
//
//            if ($val_textEvenT != null) {
//                continue;
//            }
//
//            Event::create([
//                'picture' => $picture[$i],
//                'title' => $title[$i],
//                'price' => $priceEvent[$i],
//                'text' => $textEvent[$i],
//            ]);
//
//        }
//
//        //gallery
//        $nameGallery=[
//            'IMAGE 1',
//            'IMAGE 2',
//            'IMAGE 3',
//            'IMAGE 4',
//            'IMAGE 5',
//            'IMAGE 6',
//            'IMAGE 7',
//        ];
//        $pictureGallery=[
//            '/uploads/gallery/2719996276',
//            '/uploads/gallery/8206890602',
//            '/uploads/gallery/2719996276',
//            '/uploads/gallery/8206890602',
//            '/uploads/gallery/2719996276',
//            '/uploads/gallery/8206890602',
//            '/uploads/gallery/2719996276',
//        ];
//
//        for ($i = 0; $i < count($nameGallery); $i++) {
//
//            $val_nameGallery= Gallery::where("name",$nameGallery[$i])->first();
//
//            if ($val_nameGallery != null) {
//                continue;
//            }
//
//            Gallery::create([
//                'name' => $nameGallery[$i],
//                'picture' => $pictureGallery[$i],
//            ]);
//
//        }
//
//        //gender
//        $GenderName=[
//           'man',
//            'female',
//            'other'
//        ];
//
//        Gender::create([
//            'genderName' => $GenderName[$i],
//        ]);
//
//        //permission
//
//        $namePermission=[
//            'edit-user',
//            'delete-user',
//            'show-user',
//            'create-user',
//            'staff-user-permissions',
//            'show-permissions',
//            'edit-permission',
//            'create-permission',
//            'delete-permission',
//            'show-roles',
//            'edit-role',
//            'delete-role',
//            'create-role'
//        ];
//        $labelPermission=[
//            'edit user',
//            'delete user',
//            'show all user',
//            'create new user',
//            'manage permissions users',
//            'show all permissions',
//            'edit  permission',
//            'create new permission',
//            'delete permission',
//            'show all roles',
//            'edit role',
//            'delete role',
//            'create new role'
//        ];
//
//        for ($i = 0; $i < count($namePermission); $i++) {
//
//            $val_namePermission= Permission::where("name",$namePermission[$i])->first();
//
//            if ($val_namePermission != null) {
//                continue;
//            }
//
//            Permission::create([
//                'name' => $namePermission[$i],
//                'label' => $labelPermission[$i],
//            ]);
//
//        }
//
//        //role
//        $nameRole=[
//            'manage-user',
//            'writer-manager',
//            'show-permissions',
//            'manage-permissions',
//            'manage-roles',
//        ];
//        $labelRole=[
//            'manage user',
//            'admin writer',
//            'show all permissions',
//            'manage permissions',
//            'manage roles',
//        ];
//        for ($i = 0; $i < count($nameRole); $i++) {
//
//            $val_nameRole= Role::where("name",$nameRole[$i])->first();
//
//            if ($val_nameRole != null) {
//                continue;
//            }
//
//            Role::create([
//                'name' => $nameRole[$i],
//                'label' => $nameRole[$i],
//            ]);
//
//        }
//        //PERMISSION_ROLE
//        $permission_id=[
//            1,
//            2,
//            3,
//            1,
//            5,
//            7,
//            8,
//            9,
//            10,
//            11,
//            11,
//            12,
//            13,
//            14,
//        ];
//        $role_id=[
//            1,
//            1,
//            1,
//            2,
//            8,
//            8,
//            8,
//            8,
//            8,
//            8,
//            9,
//            9,
//            9,
//            9,
//        ];
//        for ($i = 0; $i < count($permission_id); $i++) {
//
//            $val_permission_id= Role::where("name",$permission_id[$i])->first();
//
//            if ($val_permission_id != null) {
//                continue;
//            }
//
//            Role::create([
//                'permission_id' => $nameRole[$i],
//                'role_id' => $nameRole[$i],
//            ]);
//
//        }

    }

}
