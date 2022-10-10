<?php

namespace Modules\Settings\Database\Seeders;

use Illuminate\Database\Seeder;
use Laraeast\LaravelSettings\Facades\Settings;

class SettingsDatabaseSeeder extends Seeder
{
    /**
     * The list of the files keys.
     *
     * @var array
     */
    protected $files = [
        'logo',
        'favicon',
        'loginLogo',
        'loginBackground',
        'cover',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $titles = [
            'email' => 'info@ape-eg.com',
            'phone' => '(+202) 23438556',
            'mobile' => '(+202) 2341 2723',
            'fax' => '(+202) 23417149',
            'name:en' => 'Donation System',
            'name:ar' => 'نظام التبرعات',
            'description:en' => 'Donation System',
            'description:ar' => 'نظام التبرعات',
            'meta_description:en' => 'Donation System',
            'meta_description:ar' => 'نظام التبرعات',
            "welcome_text_en" => "Welcome to The Association for the Protection of the Environment",
            "welcome_text_ar" => "مرحبا بكم في جمعية حماية البيئة",
            "menu_home_en" => "Home",
            "menu_home_ar" => "الرئيسية",
            "menu_about_en" => "About",
            "menu_about_ar" => "عن الجمعية",
            "menu_services_en" => "Services",
            "menu_services_ar" => "خدماتنا",
            "menu_gallery_en" => "Media",
            "menu_gallery_ar" => "ميديا",
            "menu_reports_en" => "Reports",
            "menu_reports_ar" => "التقارير",
            "menu_volunteers_en" => "Volunteers",
            "menu_volunteers_ar" => "تطوع معنا",
            "menu_donation_en" => "Donations",
            "menu_donation_ar" => "تبرعات",
            "menu_contact_en" => "Contact Us",
            "menu_contact_ar" => "إتصل بنا",
            "video_title_en" => "is an Egyptian non-governmental organisation",
            "video_title_ar" => "هو جمعية غير حكومية مصرية",
            "video_description_en" => "The Association for the Protection of the Environment (A.P.E.) is an Egyptian non-governmental organisation established in 1984 and registered with the Ministry of Social Affairs under license number 3255.",
            "video_description_ar" => "جمعية حماية البيئة من التلوث جمعية غير هادفة للربح تعمل على دعم ومساندة جامعي القمامة في مدينة القاهرة أي فئة الزبالين",
            "services_sec_title_en" => "DONATE TO CHARITY CAUSES AROUND THE WORLD.",
            "services_sec_title_ar" => "إستراتيجية تنموية من منطلق تلبية إحتياجات",
            "services_sec_description_en" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Have you done google research which works all the time.",
            "services_sec_description_ar" => "لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. هل قمت بإجراء بحث يعمل طوال الوقت.",
            "prod_sec_title_en" => "know more about organization Products",
            "prod_sec_title_ar" => "إعرف المزيد عن منتجات الجمعية",
            "prod_sec_text_en" => "What services can an association provide to the community?",
            "prod_sec_text_ar" => "ما هى الخدمات التي يمكن للجمعيةأن تقدها للمجتمع",
            "partners_sec_title_en" => "OUR PARTNERS",
            "partners_sec_title_ar" => "شركاؤنا",
            "partners_sec_description_en" => "Popular tech companies who are seeking talents in our Landing page",
            "partners_sec_description_ar" => "شركات التكنولوجيا الشهيرة التي يعدوا شركاؤنا فى النجاح",
            "volunteers_sec_title_en" => "YOUR VOLUNTEERING EXPERIENCE AT APE IS WAITING FOR YOU",
            "volunteers_sec_title_ar" => "تجربة تطوعك فى الجمعية فى إنتظارك",
            "volunteers_sec_text_en" => "What services can an association provide to the community?",
            "volunteers_sec_text_ar" => "ما هى الخدمات التي يمكن للجمعيةأن تقدها للمجتمع",
            "about_sec_title_en" => "Charity for the people you care about",
            "about_sec_title_ar" => "جمعية حماية البيئة غير هادفة للربح",
            "about_sec_subtitle_en" => "We’re here to support you every step of the way",
            "about_sec_subtitle_ar" => "نحن هنا لدعمك فى كل خطوة على الطريق",
            "about_sec_description_en" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            "about_sec_description_ar" => "هو مجرد نص وهمي لصناعة الطباعة والتنضيد. كان هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لقد نجت ليس فقط خمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظلت دون تغيير جوهري.تم نشره في الستينيات من القرن الماضي بإصدار أوراق Letraset التي تحتوي على مقاطع Lorem Ipsum ، ومؤخرًا مع برامج النشر المكتبي مثل Aldus PageMaker بما في ذلك إصدارات Lorem Ipsum.",
            "news_sec_title_en" => "LATEST NEWS",
            "news_sec_title_ar" => "آخر الأخبارنا",
            "subscribe_sec_title_en" => "keep you updated with our news",
            "subscribe_sec_title_ar" => "إبقى على إتطلاع بأخبارنا",
            "subscribe_sec_description_en" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            "subscribe_sec_description_ar" => "د هو مجرد نص وهمي لصناعة الطباعة والتنضيد. لوريم إيبسوم هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة من النوع.",
            "subscribe_form_title_en" => "We’re here to support you every step of the way",
            "subscribe_form_title_ar" => "نحن هنا لدعمك فى كل خطوة على الطريق",
            "footer_contactinfo_en" => "CONTACT INFORMATION",
            "footer_contactinfo_ar" => "معلومات التواصل",
            "footer_addresses_en" => "ADDRESSES",
            "footer_addresses_ar" => "العنوان",
            "footer_email_en" => "EMAIL",
            "footer_email_ar" => "البريد الإلكتروني",
            "footer_phone_en" => "PHONE",
            "footer_phone_ar" => "التليفون",
            "footer_copyright_en" => "Copyright © 2022 APE. All Rights Reserved",
            "footer_copyright_ar" => "حقوق النشر © 2022 APE. كل الحقوق محفوظة",
            "contact_title_en" => "LET’S CONNECT",
            "contact_title_ar" => "اتصل بنا",
            "contact_description_en" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Have you done google research which works all the time.",
            "contact_description_ar" => " لوريم إيبسوم هو مجرد نص وهمي لصناعة الطباعة والتنضيد. لوريم إيبسوم هو مجرد نص وهمي لصناعة الطباعة والتنضيد. لوريم إيبسوم",
            "contact_form_title_en" => "HAVE AN IDEA TO HELP US ?",
            "contact_form_title_ar" => "هل لديك فكرة لمساعدتنا؟",
            "contact_form_subtitle_en" => "Get In Touch",
            "contact_form_subtitle_ar" => "اتصل بنا",
            "volun_title_en" => "YOUR VOLUNTEERING EXPERIENCE START HERE",
            "volun_title_ar" => "خبرتك التطوعية تبدأ من هنا",
            "volun_form_title_en" => "Personal Account",
            "volun_form_title_ar" => "الحساب الشخصي",
            "volun_q1_en" => "Mention your top skills, interests and hobbies you can utilize through volunteering",
            "volun_q1_ar" => "أذكر أهم المهارات والاهتمامات والهوايات التي يمكنك تقديمها عبر التطوع",
            "volun_q2_en" => "Mention your past experiences in volunteer work, including (type of volunteering / name of volunteering place / volunteer period)",
            "volun_q2_ar" => "أذكر خبراتك السابقة في العمل التطوعي من حيث ( نوع التطوع / اسم جهة التطوع / مدة التطوع )",
            "volun_q3_en" => "Indicate one sector or more you would like to volunteer in",
            "volun_q3_ar" => "اذكر مجال أو أكثر ترغب بالتطوع فيه",
            "volun_q4_en" => "The preferred group to work with through volunteering",
            "volun_q4_ar" => "الفئة المفضل التطوع للعمل معها",
            "volun_q5_en" => "Your preferred volunteer time (mention time, days and period you can volunteer in)",
            "volun_q5_ar" => "الوقت المفضل لديك للتطوع ( أذكر الأوقات والأيام والفترة الزمنية التي يمكنك التطوع بها )",
            "volun_q6_en" => "Do you have a car to reach the association headquarters?",
            "volun_q6_ar" => "هل لديك سيارة لاستخدامها في الوصول لمقر الجمعية؟",
            "volun_q7_en" => "How did you know about the association?",
            "volun_q7_ar" => "مصادر معرفتك عن الجمعية",
            "volun_q8_en" => "What are your motives (reasons) you want to volunteer for",
            "volun_q8_ar" =>"ماهي دوافعك ( الأسباب ) التي من أجلها ترغب في التطوع",
            "awards_title_en" => "APE AWARDS",
            "awards_title_ar" => "جوائز الجمعية",
            "awards_desc_en" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            "awards_desc_ar" => " لوريم إيبسوم هو مجرد نص وهمي لصناعة الطباعة والتنضيد. لوريم إيبسوم هو مجرد نص وهمي لصناعة الطباعة والتنضيد. لوريم إيبسوم",
            "service_page_title_en" => "DONATE TO CHARITY CAUSES AROUND THE WORLD.",
            "service_page_title_ar" => "تبرع لجمعية أبناء الأرض",
            "service_page_desc_en" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Have you done google research which works all the time.",
            "service_page_desc_ar" => " لوريم إيبسوم هو مجرد نص وهمي لصناعة الطباعة والتنضيد. لوريم إيبسوم هو مجرد نص وهمي لصناعة الطباعة والتنضيد. لوريم إيبسوم",
            "report_page_title_en" => "OUR ANNUAL REPORTS",
            "report_page_title_ar" => "تقاريرنا سنوية",
            "report_page_desc_en" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Have you done google research which works all the time.",
            "report_page_desc_ar" => " لوريم إيبسوم هو مجرد نص وهمي لصناعة الطباعة والتنضيد. لوريم إيبسوم هو مجرد نص وهمي لصناعة الطباعة والتنضيد. لوريم إيبسوم",
            "donation_page_description_en" => "Your donation to the Family Gift Fund helps provide gifts and support to struggling children and families. You’ll help them meet urgent needs and let them know how much you care about their their well-being.
                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been, remaining essentially unchanged.",
            "donation_page_description_ar" => "تبرعك لجمعية أبناء الأرض سوف يساعدها على توفير الهدايا والدعم لأحداث الأطفال والأسر. سوف تساعدها في تقديم الحفلات والإعانات الضرورية لأحداثها ويحذرها بأنك تهتم بحياتهم.",
            "donation_method_description_en" => ". YOUR DONATION TO THE FAMILY GIFT FUND HELPS PROVIDE HELPS AND SUPPORT TO APE SERVICES, IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING INDUSTRY. LOREM IPSUM HAS BEEN, REMAINING ESSENTIALLY UNCHANGED.",
            "donation_method_description_ar" => "يمكنك تبرع لجمعية أبناء الأرض بالإمتياز لتوفير الحفلات والإعانات الضرورية لأحداثها ويحذرها بأنك تهتم بحياتهم.",

        ];

        foreach ($titles as $key => $value) {
            Settings::set($key, $value);
        }



        // images
        foreach ($this->files as $file) {
            Settings::set($file)->addMedia(__DIR__ . '/images/' . $file . '.png')
                ->preservingOriginal()
                ->toMediaCollection($file);
        }
    }
}
