<?php

namespace Modules\Settings\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Settings\Entities\AboutUs;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create or update about us
        $about = AboutUs::updateOrCreate(
            ['id' => 1],
            [
                'address:en' => 'Association for the Protection of the Environment, P.O. Box 32 Qal’a, Cairo, Egypt',
                'address:ar' => "جمعية حماية البيئة من التلوث صندوق بريدي 32 القلعة – القاهرة",
                'video_title:en' => 'IS AN EGYPTIAN NON-GOVERNMENTAL ORGANISATION',
                'video_title:ar' => 'منظمة مصرية غير حكومية',
                'video_description:en' => "The Association for the Protection of the Environment (A.P.E.) is an Egyptian non-governmental organisation established in 1984 and registered with the Ministry of Social Affairs under license number 3255.",
                'video_description:ar' => "جمعية حماية البيئة من التلوث جمعية غير هادفة للربح تعمل على دعم ومساندة جامعي القمامة في مدينة القاهرة أي فئة الزبالين",
                "foundation:en" => "APE is a non governmental organization founded in 1984 and registered under the
                    number 3255, and has been reregistered as a central organization in 1994 under the
                    number 263, working in the field of environment protection against pollution caused
                    by domestic solid wastes in Cairo, and precisely in areas occupied by garbage
                    collectors. APE aimed at developing this population deprived of services through the
                    empowerment of women, children and young people by providing them with education,
                    care and a better economic and social environment.
                    <br><br>
                    • In 1986, APE started its activities by an organic fertilizers unit at Mokattam to
                    recycle pigsties and organic wastes obtained from the houses. This fertilizer would
                    be used for agricultural purposes in the reclamation of desert lands.
                    <br><br>
                    • In 1987, APE established a development program for the poor and needy categories
                    and a carpet and handicraft unit was opened in the association premises in order to
                    attract the illiterate daughters and wives of the garbage collectors in order to
                    teach them and to train them on manufacturing carpets and handicrafts.

                    • In 1988, this developmental activity has been improved in order to apply the new non
                                traditional educational policies. Thus, their improved standards would also have its
                                impact on the women's daily life skills such as reproductive and general health and
                                social skills like communication through dialogue, decision-making, educational skills
                                such as literacy, computer and foreign languages learning and economic skills like
                                training on various professions and cultural skills such as excursions, and lectures.
                                Carpet weaving and handicraft have been developed in agreement with the goals.
                                <br><br>
                                • In 1992, the educational unit was inaugurated, including:
                                * Nursery from 6 months to 6 years old.
                                * Education of children who didn't go to school. o Mother and child care.
                                * Girls literacy classes for the preparatory level.
                                In the same year, the APE declared the results of its project that has already started
                                in 1999
                                <br><br>
                                \"Wastes separation from the sources\" it has been applied in the districts of Manial,
                                Deir elmalak, Maadi, Basateen and Noweiba. Efforts are deployed in order to apply it in
                                the remaining areas in and out of Cairo.
                                <br><br>
                                • In 1993, was opened a unit for recycling the wastes in paper collected from schools
                                and offices, applying the non traditional education policies.
                                • In 1994, Ape formed a committee in Torah to set up a plan of work aiming at improving
                                the living standard of the area population, in particular for the garbage collectors.
                                • In 1995, the Prime Minister issued a ministerial decree that legalized the existence
                                of the city, thus, the inhabitants legalized their housing.
                                • In 1996, the APE was reregistered under the number 263 in order to extend its services
                                to the whole country though establishing branches in the different governorates. In the
                                same year, APE opened a center for mother and child care in Torah to serve the area
                                population in different medical domains, and held several training sessions to young
                                girls and women to become health leaders.
                                <br><br>
                                • In 1997, which is the beginning of the use of intermediary stations to recycle garbage
                                in the different governorates of Egypt, APE opened a branch to extend its activities in
                                Dahab city in south Sinai.
                                <br><br>
                                • 1998 was a year full of events; a geographical map of Torah was approved, Ape
                                established a modern center for training and producing recycling machines and all
                                wastes-related activities were moved from Torah to Kattamiah.
                                • In 1999, the fertilizers unit was also moved from Mokattam to Kattamiah.
                                • In 2000, productive workshops were created in Kattamiah in order to recycle the
                                plastic wastes.
                                <br><br>
                                • In 2001, an environmental garden where old Egyptian trees were planted as date-tree
                                has been planted in Mokattam in the place of the fertilizers unit that was transferred
                                to Kattamiah.
                                <br><br>
                                • As of 1999 up to the present APE continued to inaugurate several projects in the
                                development field such as \"Adolescent Girl Care\" project, \"Reproductive Health Care\"
                                project, \"Hair Health Care\" project, Hepatitis B and C prevention project, \"Parents'
                                Awareness\" in association with El Karma Company, \"Literacy Classes\", \"Reinforcement
                                Classes\", \"Literacy of Home Students\", \"Towards a Better Life for Disabled Children\",
                                \"Scholarships Program\", \"Towards a better Environment\", \"Eye Disease\", \"Anemia\", \"TB
                                Prevention\", and others.
                                • In 2009 Al Haram City branch was established which included A Day Care Center,
                                Literacy Classes, Sorting of Garbage from the Source, Planting of the Trees.
                                • In 2012 APE in cooperation with Lotus International Organization started to
                                manufacture lamps from the garbage cans to provide electricity in the streets with solar
                                energy.
                                • In 2015 APE made a sports court in cooperation with FIFA.
                    ",
                "foundation:ar" => "APE هي منظمة غير حكومية تأسست في 1984 ومسجلة تحت
                    رقم 3255 ، وتم تسجيله كمنظمة مركزية في 1994 تحت
                    عدد 263 تعمل في مجال حماية البيئة من التلوث الناتج
                    بالنفايات المنزلية الصلبة في القاهرة ، وبالتحديد في المناطق التي تشغلها النفايات
                    جامعي. تهدف APE إلى تطوير هؤلاء السكان المحرومين من الخدمات من خلال
                    تمكين النساء والأطفال والشباب من خلال توفير التعليم لهم ،
                    رعاية وبيئة اقتصادية واجتماعية أفضل.
                    <br> <br>
                    • في عام 1986 ، بدأت المؤسسة أنشطتها من خلال وحدة الأسمدة العضوية في المقطم إلى
                    إعادة تدوير الخنازير والنفايات العضوية التي يتم الحصول عليها من المنازل. هذا الأسمدة
                    تستخدم للأغراض الزراعية في استصلاح الأراضي الصحراوية.
                    <br> <br>
                    • في عام 1987 ، أسست المؤسسة برنامج تنمية للفئات الفقيرة والمحتاجة
                    وتم افتتاح وحدة للسجاد والحرف اليدوية في مقر الجمعية من أجل
                    جذب بنات وزوجات جامعي القمامة الأميات من أجل
                    تعليمهم وتدريبهم على صناعة السجاد والصناعات اليدوية.

                    • في عام 1988 ، تم تحسين هذا النشاط التنموي من أجل تطبيق الجديد غير
                    السياسات التعليمية التقليدية. وبالتالي ، فإن معاييرهم المحسنة سيكون لها أيضًا
                    التأثير على مهارات الحياة اليومية للمرأة مثل الصحة الإنجابية والعامة و
                    المهارات الاجتماعية مثل التواصل من خلال الحوار واتخاذ القرار والمهارات التعليمية
                    مثل محو الأمية والكمبيوتر وتعلم اللغات الأجنبية والمهارات الاقتصادية مثل
                    التدريب على مختلف المهن والمهارات الثقافية مثل الرحلات والمحاضرات.
                    تم تطوير نسج السجاد والحرف اليدوية بما يتفق مع الأهداف.
                    <br> <br>
                    • في عام 1992 تم افتتاح الوحدة التعليمية ومنها:
                    * الحضانة من 6 شهور حتى 6 سنوات.
                    * تعليم الأطفال الذين لم يذهبوا إلى المدرسة. o رعاية الأم والطفل.
                    * فصول محو الأمية للبنات للمرحلة الإعدادية.
                    في نفس العام ، أعلن APE عن نتائج مشروعه الذي بدأ بالفعل
                    في عام 1999
                    <br> <br>
                    \"فصل النفايات عن منابعها\" تم تطبيقه في مناطق المنيل ،
                    دير الملاك والمعادي والبساتين ونويبع. يتم بذل الجهود من أجل تطبيقها في
                    باقي المناطق داخل وخارج القاهرة.
                    <br> <br>
                    • في عام 1993 تم افتتاح وحدة إعادة تدوير النفايات الورقية المجمعة من المدارس
                    والمكاتب التي تطبق سياسات التعليم غير التقليدي.
                    • في عام 1994 ، شكل القرد لجنة في طره لوضع خطة عمل تهدف إلى التحسين
                    المستوى المعيشي لسكان المنطقة ، وخاصة جامعي القمامة.
                    • في عام 1995 أصدر رئيس مجلس الوزراء قراراً وزارياً بتقنين الوجود
                    وبالتالي ، شرّع السكان مساكنهم.
                    • في عام 1996 ، تم تسجيل APE تحت الرقم 263 من أجل توسيع خدماتها
                    للبلاد كلها من خلال إنشاء فروع في المحافظات المختلفة. في ال
                    في العام نفسه ، افتتحت APE مركزًا لرعاية الأم والطفل في طرة لخدمة المنطقة
                    السكان في المجالات الطبية المختلفة ، وعقد العديد من الدورات التدريبية للشباب
                    الفتيات والنساء ليصبحن قادة في مجال الصحة.
                    <br> <br>
                    • في عام 1997 وهو بداية استخدام المحطات الوسيطة لإعادة تدوير القمامة
                    في مختلف محافظات مصر ، افتتحت APE فرعًا لتوسيع أنشطتها في
                    مدينة دهب بجنوب سيناء.
                    <br> <br>
                    • كان عام 1998 عاما حافلا بالأحداث. تمت الموافقة على خريطة جغرافية للتوراة ، القرد
                    إنشاء مركز حديث للتدريب وإنتاج آلات إعادة التدوير وجميع
                    تم نقل الأنشطة المتعلقة بالنفايات من التوراة إلى القطامية.
                    • في عام 1999 تم نقل وحدة الأسمدة من المقطم إلى القطامية.
                    • في عام 2000 تم إنشاء ورش إنتاجية في القطامية لإعادة تدوير
                    النفايات البلاستيكية.
                    <br> <br>
                    • في عام 2001 ، حديقة بيئية حيث تم غرس الأشجار المصرية القديمة كأشجار النخيل
                    تم زراعته في المقطم مكان وحدة الأسمدة التي تم نقلها
                    لقطامية.
                    <br> <br>
                    • اعتبارًا من عام 1999 حتى الوقت الحاضر ، واصلت APE تدشين العديد من المشاريع في الولايات المتحدة
                    مجال التنمية مثل مشروع \"رعاية الفتيات المراهقات\" ، \"رعاية الصحة الإنجابية\"
                    مشروع \"العناية بصحة الشعر\" ، مشروع الوقاية من التهاب الكبد B و C ، \"الآباء\"
                    توعية \"بالاشتراك مع شركة الكرمة\" فصول محو الأمية \"تعزيز
                    فصول دراسية ، \"محو أمية طلاب المنزل\" ، \"نحو حياة أفضل للأطفال المعوقين\" ،
                    \"برنامج المنح الدراسية\" ، \"نحو بيئة أفضل\" ، \"أمراض العيون\" ، \"فقر الدم\" ، \"السل
                    ",
                "our_vision:en" => "Upgrading the communities of garbage collectors and the marginalized
                    towards a better life.",
                "our_vision:ar" => "الارتقاء بمجتمعات جامعي القمامة والمهمشين نحو حياة أفضل.",
                "our_message:en" => "Promote environmentally safe solid waste management through empowering
                    garbage collectors particularly women, children and youth to become
                    technologically able to manage a viable system of household waste
                    including recycling in Egypt through comprehensive development: health,
                    education, social, economic and cultural programs to become agents of
                    change for a better environment.",
                "our_message:ar" => "تعزيز الإدارة الآمنة بيئياً للنفايات الصلبة من خلال التمكين
                    جامعي القمامة وخاصة النساء والأطفال والشباب ليصبحوا
                    قادرًا تقنيًا على إدارة نظام قابل للتطبيق للنفايات المنزلية
                    بما في ذلك إعادة التدوير في مصر من خلال التنمية الشاملة: الصحة ،
                    التعليم ، والبرامج الاجتماعية والاقتصادية والثقافية لتصبح وكلاء
                    التغيير من أجل بيئة أفضل.",
                "our_goals:en" => "A.P.E.'s overall objective is to improve the lives of garbage collectors as
                    individuals and as a community. A.P.E. combines its interest in serving the
                    poor with an interest in protecting the environment, specifically with
                    regards to household waste.
                    Through its support of the garbage collector communities, A.P.E. aims to
                    achieve the following specific objects:
                    <br><br>
                    Design strategies to improve solid waste management practices across Egypt.
                    Transfer the technology of solid waste management and advocate for solid
                    waste
                    management policy change across governorates in Egypt.
                    Improve the standard of living among garbage collectors especially in the
                    fields
                    of health, income, education, with a special emphasis on women and children.
                    Create new employment opportunities for garbage collectors in the field of
                    waste management and recycling.• Provide training opportunities for garbage
                    collectors and their families in education, health, crafts, and other areas.",
                "our_goals:ar" => "الهدف العام لـ A.P.E. هو تحسين حياة جامعي القمامة مثل
                    الأفراد وكمجتمع. قرد. يجمع بين مصلحته في خدمة
                    فقير مع مصلحة في حماية البيئة ، على وجه التحديد مع
                    فيما يتعلق بالنفايات المنزلية.
                    من خلال دعمها لمجتمعات جامعي القمامة ، استطاعت شركة A.P.E. يهدف الى
                    تحقيق الأغراض المحددة التالية:
                    <br> <br>
                    تصميم استراتيجيات لتحسين ممارسات إدارة النفايات الصلبة في جميع أنحاء مصر.
                    نقل تكنولوجيا إدارة النفايات الصلبة والدعوة إلى الصلبة
                    المخلفات
                    تغيير سياسة الإدارة عبر المحافظات في مصر.
                    تحسين مستوى المعيشة بين جامعي القمامة وخاصة في منطقة
                    مجالات
                    الصحة والدخل والتعليم ، مع التركيز بشكل خاص على النساء والأطفال.
                    خلق فرص عمل جديدة لهواة جمع القمامة في مجال
                    إدارة النفايات وإعادة التدوير • توفير فرص تدريب للقمامة
                    الجامعين وأسرهم في مجالات التعليم والصحة والحرف وغيرها من المجالات.",
            ]
        );


        // add logo image
        $about->addMedia(__DIR__ . '/about/about.jpg')
            ->preservingOriginal()
            ->toMediaCollection('images');
    }
}
