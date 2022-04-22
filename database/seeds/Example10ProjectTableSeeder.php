<?php

use App\Feedback;
use App\Project;
use Illuminate\Database\Seeder;

class Example10ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('zh_TW');
        Project::create([
            'raising_user_id' => 19,
            'fundraiser' => '人權辦桌 ',
            'email' => $faker->email,
            'name' => '人權辦桌：食飯皇帝大，食飽才有氣力行',
            'category_id' => 10,
            'started_at' => '2018-11-8',
            'ended_at' => '2018-12-21',
            'curr_amount' => 52100,
            'goal_amount' => 200000,
            'relative_web' => 'www.zeczec.com/projects/ren-quan-ban-zhuo?r=k3008470057',
            'backer' => 55,
            'brief' => '來吧，一起吃頓飯！這裡的人們沒有你我，圍著圓桌暖胃也暖心。',
            'description' => '「人權辦桌」之濫觴：因為他人的真心理解，生哥得以熬過生命中的嚴峻寒冬。



「人權辦桌」之所以舉行，很大一部分是源自於生哥分享他剛剛出獄後的經歷

 

　　生哥，本名陳欽生，馬來西亞華人，大學時至臺灣就讀成大化工系，那時為了加強中文，他時常到台南的美國新聞處讀報。有天，美國新聞處發生爆炸案，生哥因而被誣陷入獄，關押了十二年。出獄後，國民黨政府既不給他中華民國的身分證亦不讓他回到家鄉。不只如此，長期以來情治單位的騷擾與社會對於政治受難者的污名歧視，讓生哥便在街頭度過了將近三年的光陰，在那段時間當中，一間餐廳的廚師給予幫助，每天給他兩個便當，讓他得以熬過那段最艱辛的日子。

 

　　爾後，生哥一直感念著在他生活困窘時對他伸出援手的人，那一個個便當，有著遠大於一餐溫飽的意義──它是一股社會中人與人之間相互扶持、互相傾聽與接納的力量。後來，生哥找不到那家餐廳，無法再次鄭重地向對方道謝，於是他想，若有機會，希望將自己的遭遇透過一頓飯的時間和現在的無家者們分享。他想說的是：生活雖然有許多苦痛，甚至可能被社會排除，但只要人與人之間的關係不斷裂、不放棄希望，一切都有可能被改變。

「分享」的本質：試圖消弭人與人之間的鴻溝。 #
若要了解「人權辦桌」生成的原因，單單從生哥的故事出發，會顯得似乎是純粹地想要「幫助他人」的感覺。但其實，「人權辦桌」更著重於生哥故事的後半段──關於「分享」。

 

我們每個人的成長背景不盡相同、有所差異，無法絕對地理解他人，致使社會產生許多汙名與歧視，可能因為不了解而害怕、不明白而排斥。然而，一旦我們有機會多認識彼此，這些疑惑、徬徨、恐懼也許能逐漸被消解，人與人之間的距離也能更接近。就如同當年生哥將自身的政治受難經驗與餐廳廚師訴說，透過交流得到對方的友善對待。

 

「訴說」是分享的第一步，當生活有餘裕以後，生哥希望這樣的對話能夠再次展開。曾經是無家者的他希望能夠與無家者們共同分享，讓這樣的分享方式茁壯出力量，使更多的人看見──在這社會上，有諸多鎂光燈焦點外卻如此奮力生存的人們。他們並非公眾人物口中：「載至陽明山放置」、「噴水驅逐」、「以強光照射」，或者是需要「被洗乾淨」的「物件」，他們每一個都是活生生的「人」，擁有自己的不易被看見的過去及無法預想的未來。

 

「人權辦桌」想要做的，看似很艱難卻也很簡單──僅僅是希望在一頓飯的時間裡，讓每個人都能夠好好地訴說與傾聽。',
        ]);
        Feedback::create([
            'project_id' => 19,
            'date' => '2019-1-30',
            'price' => 100,
            'backer' => 22,
            'description' => '將以電子謝卡致謝留念（請於備註欄留下您的E-mail聯絡資訊）',
        ]);
        Feedback::create([
            'project_id' => 19,
            'date' => '2019-1-30',
            'price' => 200,
            'backer' => 11,
            'description' => '徽章+貼紙組 
（如不需收到回饋品， 請在備註欄註明）',
        ]);
        Feedback::create([
            'project_id' => 19,
            'date' => '2019-1-30',
            'price' => 300,
            'backer' => 10,
            'description' => '毛巾 
（如不需收到回饋品， 
請在備註欄註明）',
        ]);
        Feedback::create([
            'project_id' => 19,
            'date' => '2019-1-30',
            'price' => 450,
            'backer' => 10,
            'description' => 'T-shirt 
（如不需收到回饋品， 
請在備註欄註明）',
        ]);
        Feedback::create([
            'project_id' => 19,
            'date' => '2019-1-30',
            'price' => 550,
            'backer' => 2,
            'description' => '帆布包 
（如不需收到回饋品， 
請在備註欄註明）',
        ]);

        Project::create([
            'raising_user_id' => 20,
            'fundraiser' => ' owl in box ',
            'email' => $faker->email,
            'name' => '嘿美與牠的產地：「owl In box 貓頭鷹巢箱扭蛋機捐款箱」募資計畫',
            'category_id' => 10,
            'started_at' => '2018-11-8',
            'ended_at' => '2019-1-10',
            'curr_amount' => 102500,
            'goal_amount' => 350000,
            'relative_web' => 'www.zeczec.com/projects/owlinbox?r=k2570470057',
            'backer' => 63,
            'brief' => '一群對台灣山林充滿熱情的年輕人，組成Owlinbox募款箱製作小組，繼承保育學會「捨身救援」精神，結合「創作者」、「裝置藝術店家」、「保育學會」三方，實行「文創支持保育」的永續共生計畫。',
            'description' => '台灣擁有多樣化的物種生態，占全世界的2.5%，其中不乏高達十二種貓頭鷹棲息著。但隨著人類高度開發、棲息地被破壞，導致這些珍稀的鳥類大量銳減！貓頭鷹不是明星動物，救助單位也因越來越少的救助資源，讓原本在動保邊緣的貓頭鷹處境更雪上加霜！
扭蛋「扭轉」貓頭鷹的命運，我們需要你！#
從人工巢箱探出頭的領角鴞寶寶（曾翌碩提供）
哈囉，我們是一群對台灣山林充滿熱情的年輕人，組成Owlinbox募款箱製作小組，繼承保育學會「捨身救援」精神，結合「創作者」、「裝置藝術店家」、「保育團體」三方，實行「文創支持保育」的永續共生計畫。

你了解貓頭鷹嗎？
對貓頭鷹的印象還停留在魔法世界信差嘿美嗎？
什麼！原來台灣也有貓頭鷹？    #
台灣棲息十二種貓頭鷹圖鑑#
全世界約有217種貓頭鷹，台灣就有十二種貓頭鷹棲息，其實牠們是金字塔頂端的掠食者，身懷獵捕武器，故稱為「猛禽」！


然而，隨著人類過度開發，台灣的貓頭鷹正面臨嚴峻的生存考驗！#

疑點重重！台灣貓頭鷹的死因？！#
同時也是牠們遭遇的生存困境...#


・風災吹落巢：若缺少適當的繁殖場所，親鳥會選擇不適合的地方築巢繁殖，例如檳榔的殘幹或鐵皮屋的夾縫，這些不當的巢位都會增加幼鳥落巢的風險

・車禍路殺：一條條的馬路開進自然林地，讓飛行速度不快的貓頭鷹成為輪下魂

・誤食吃了農藥的小動物：每年因中毒死亡的短耳鴞數量驚人

・誤闖民宅：時常有貓頭鷹在通風孔、久未使用的冷氣機體築巢，圖為在窗台出現的領角鴞幼鳥

・食物短缺：因為生物多樣性降低，可選擇的獵物變少，可能造成貓頭鷹的食物單純化甚至不易找到食物

・除上述外，受野狗野貓攻擊、誤觸鳥網陷阱......等，無時無刻都面臨著不同考驗！

（以下圖片台中市野生動物保育學會、曾翌碩提供）



樹都被砍光了，貓頭鷹住哪？ 
#
這也是為什麼貓頭鷹需要人工巢箱！#
下圖為在巢箱繁殖幼鳥的領角鴞（曾翌碩提供）


貓頭鷹不會自行築巢，唯一的來源就是天然樹洞。但樹洞的形成的速度跟不上森林被砍伐、棲息地被破壞的速度。適合築巢的樹洞越來越少，貓頭鷹媽媽只能尋找不適合的地方來繁衍，造成幼鳥容易落巢。

巢箱能彌補被破壞的天然棲地，給貓頭鷹一個安全舒適的家，也有利於專業人員進行監測、復育的工作。設立人工巢箱是保育貓頭鷹的重要工作，大幅減緩了貓頭鷹的傷殘數量，更逐漸改善了貓頭鷹的繁衍狀況。


每年落巢的領角鴞幼鳥佔救援數量的1/3 #
但，保育人員的困境是......#
保育學會幾十年來持續進行著研究及救援落難貓頭鷹的工作，但因貓頭鷹在台灣非明星動物，因此研究及保育部分大多仰賴志工出錢出力，救傷部分雖有政府補助，面對逐年增加的傷病動物，仍常面對資金短缺的困境

・資金：以都會區最常見的領角鴞為例，每年保育學會救援大約60-70隻的領角鴞，其中約有1/3的數量為落巢的幼鳥。在人為照護下，幼鳥至少經過四個月的照顧及訓練才能順利回到野外，這些資源及人力，是筆不小的開銷

．人力：救援貓頭鷹需要專業的知識，人員培訓不易。一人多用，沒有多餘人力推廣與教育，知識無法傳承。

・資源：動保聚焦明星動物，一般大眾對於貓頭鷹的不熟悉，間接阻隔貓頭鷹接受外部救助的機會。


設計師參戰！一台讓巢箱「弄假成真」的扭蛋機 
#
什麼是巢箱扭蛋機的捐款箱？
#
身為設計師的我們，沒有足夠的知識進行專業的貓頭鷹救援。於是Owlinbox小隊長號招文創人的力量，設計一款獨一無二的募款箱，盡文創人之力，不只可以解決保育學會人力、宣傳、資源上的匱乏，更也是三個不同領域的橋樑，大家一起來做好事！

老少咸宜的扭蛋X貓頭鷹巢箱，「扭轉」貓頭鷹處境：
有別於一般捐款箱缺少互動與回饋，我們從「拯救貓頭鷹的巢箱」概念出發，使用溫潤的實木、溫暖手繪以及趣味的扭蛋機，打造出親切有趣的「巢箱扭蛋機募款箱」。

投下一杯飲料的錢，即可幫助一隻貓頭鷹一天救援所需。
扭蛋內容：實裝第一彈-旅日設計師佩醬設計「貓頭鷹勳章」四款。',
        ]);
        Feedback::create([
            'project_id' => 20,
            'date' => '2019-3-1',
            'price' => 200,
            'backer' => 31,
            'description' => '【 情義相挺夠義氣 】   
:::贊助一片木板:::   

感謝您對貓頭鷹保育的支持，專案結束後將寄出感謝電子卡',
        ]);
        Feedback::create([
            'project_id' => 20,
            'date' => '2019-3-1',
            'price' => 500,
            'backer' => 28,
            'description' => '【 萌禽卡集好集滿 A系列 】 
:::支援最重要的一片木板-底版，並獲得明信片套組作為回饋！:::

．貓頭鷹明信片套組A（共六款）x 1：  領角鴞、黃嘴角鴞、短耳鴞、褐林鴞、灰林鴞、蘭嶼角鴞',
        ]);
        Feedback::create([
            'project_id' => 20,
            'date' => '2019-3-1',
            'price' => 500,
            'backer' =>4,
            'description' => '【 萌禽卡集好集滿 B系列 】 
  :::支援最重要的一片木板-底版，並獲得明信片套組作為回饋！:::   

． 貓頭鷹明信片套組B（共六款）x 1： 
黃魚鴞、東方草鴞、鵂鶹、褐鷹鴞、長耳鴞、東方角鴞',
        ]);

    }
}
