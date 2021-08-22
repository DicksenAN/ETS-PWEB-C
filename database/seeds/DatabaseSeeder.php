<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	'id' => 101,
		    'name' => 'James Rafferty Lee',
		    'email' => 'jamesrafe10@gmail.com',
            'phone' => '081524008282',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
		    'password' => Hash::make('jamesrafe10'),
		    'avatar' => 'foto3.jpg',
        ]);
        DB::table('users')->insert([
        	'id' => 102,
		    'name' => 'Aully Luloiman',
            'email' => 'alaiman@gmail.com',
            'phone' => '081283712984',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
		    'password' => Hash::make('pisangenak'),
		    'avatar' => 'foto.jpg',
        ]);
        DB::table('users')->insert([
        	'id' => 103,
		    'name' => 'Aubrey Aubergine',
		    'email' => 'aubergine@gmail.com',
            'phone' => '08112421355',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
		    'password' => Hash::make('omoricool'),
		    'avatar' => 'foto2.jpg',
        ]);
        DB::table('threads')->insert([
            'user_id' => 102,
            'id' => 91,
            'question' => "CapitaRetail China Trust (CRCT) downwards?",
            'body' => "china aiming for usd 14k gdp by 2025 and usd 23k as they near 2035.
            they are also studying tax changes to redistribute wealth so that below 5k no tax etc.
            more money in the hand of consumer will benefits shopping center.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('replies')->insert([
            'user_id' => 101,
            'thread_id' => 91,
            'body' => "I owned this stock for years and sold it.

            It' s great as a bond proxy, giving out very generous dividends and very stable price.
            
            But you won' t be making much if you are eyeing capital gains.  The price just doesn' t move much.
            
            So if you want a retirement stock and live off the dividends, it is a solid choice.  Just don' t bother looking at price movements, it will be stagnant.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 103,
            'thread_id' => 91,
            'body' => "Aren' t all REITs like that? Good yields, slow up slow down, unless there' s a crisis or a bad results.I always said the best ways to enter a REIT you been eyeing is during a crisis, or a bad results. Another is  biting into the stock just after XD. For this one don' t agree, that it is a turtle stock really. During Circuit Breaker   it went below a dollar. End of last year it was trading around $1,10 plus. Then it shot up to $1.48 recent high. But after xD it' s been falling, and recent because of China situation, people are cautious. But It' s A Great REITs to hold long term. ",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 91,
            'body' => "the chinese gov actions impact is lower stock price.
            any money who wanted to or force to leave china/hk, will have to sell low and exit.
            leaving money behing in china. ie foreign dollar outflow reduced.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('threads')->insert([
            'user_id' => 103,
            'id' => 93,
            'question' => "Tianjin Zhongxin - pneumonia drug play?",
            'body' => "From someone in the chinese forum (Eastmoney) and translate from google translation. Take it as reading a story as not sure if it is correct. 
            https://dougu.eastmoney.com/a/1065572938.html
            
            The core single product of Zhongxin Pharmaceutical: State-secured variety-Suxiao Jiuxin Pill. In 2019, the sales volume of 4,484,200 pieces, although I have not figured out what unit this &ldquo bar&rdquo is, it does not prevent us from deducing the future trend of this one billion-level single product.
            
            This uses the first number: in 2020, 150 million elderly people over 60 will have cardiovascular and cerebrovascular diseases. The actual proportion may be higher, and it will continue to increase in the future.
            As people&rsquo s awareness of health care increases (you don&rsquo t necessarily buy Suxiao Jiuxin Pills when you&rsquo re sick, every family usually has to keep them), as well as the promotion of Tianjin, Shanghai and Shenzhen Pharmaceuticals in the southern market after the mixed reform, and the company&rsquo s The pharmacological excavation of Suxiao Jiuxin Pills, the expansion of the audience, and the market demand for quick effects will definitely increase substantially.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 93,
            'body' => "Let' s calculate a specific number in 3-10 years. According to elderly people over 60 years of age suffering from cardiovascular and cerebrovascular diseases, 100 million of them consume 1 piece per person per year, a total of 100 million pieces. The demand has doubled 22 times compared with 2019. Other factors such as drug price increase and the increase in the demand population base are not considered for the time being. For the foreseeable next 10 years, sales will increase by an average annual growth rate of 30%-50%, with quick results. The annual sales of the company should reach 20-30 billion, and the net profit will reach 15-20 billion. The price-earnings ratio is 25 times, and the valuation is 375-500 billion. The market value will be nearly 40 times higher than the current price. It is getting more and more serious, and the current trend of rejuvenation of cardiovascular and cerebrovascular diseases caused by work pressure and irregular life rhythms, the future market demand will be even greater, and the market value may be far more than that, and it is still unknown.
            This is not counting the development of other varieties and participating companies, such as Jingwanhong, Shunaoxin Diwan, Qingfei Xiaoyanwan, Zilong Jinpian and so on. Putting these together is a quick-acting heart-relief pill, so the future market value of China New Pharmaceuticals is expected to be 700-1000 billion.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 101,
            'thread_id' => 93,
            'body' => "what is your price range before adding?",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 103,
            'thread_id' => 93,
            'body' => "Analyst report in chinese on 600329.SH

            http://hk.jrj.com.cn/2021/06/30145733021665.shtml",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('threads')->insert([
        	'id' => 101,
            'user_id' => 101,
            'question' => 'Resume trading on 23 Aug 2021',
            'body' => "Anyone still holding onto this baby?",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('replies')->insert([
            'user_id' => 103,
            'thread_id' => 101,
            'body' => "1000 lots @ $0.002",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
		DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 101,
            'body' => "so ur 1000 lots will become 1000/50 = 20 lots after consolidation

            and according to the circular, NTA = 0.007 cents after consolidation
            
            So on monday it will trade at 0.010 cents? so u get back 20 x 0.01 cents = $20?",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('threads')->insert([
            'user_id' => 103,
            'id' => 102,
            'question' => "Wilmar - Watch for a Strong Rally to Come!",
            'body' => "The bottoms for both MACD and RSI are divergent from Price! MACD is near 0 axis, it will fly once MACD go through and above 0 axis",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 102,
            'body' => "Well, with Nano' s gross margin deflating and revenue growth slowing down, the current view that it is a  growth stock with 35x multiple is being questioned.

            I have no doubt that Nano has a sexy story to tell.  But if the story doesn' t translate to $, then it will inevitably collapse (as it' s happening now).
            
            And I have no sympathy for the retail investers who pushed Nano all the way to over $6 with 80x P/E and now losing their pants.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 102,
            'body' => "Can' t disagree with you that it is very high on multiples, esp when trading at $5 - $6.
            It all depends on how market values its future as well though.
            That is the risk investors / traders must understand going into Nano, where it has shown last Q or H that it is not able to grow at the expected rate.
            But let' s leave Nano discussion in the right forum.
            
            BEST!",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('threads')->insert([
        	'id' => 104,
            'user_id' => 103,
            'question' => 'Potential Multi-Bagger Proxy to ESG Investing',
            'body' => "Memiontec
            Read more about the article as per the link
            https://www.investingnote.com/posts/2273842",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 104,
            'body' => "All these BS talk. Membranes technology is nothing new. You buy from manfucturer and not your own technology. Look at Hyflux and judge yourself.Look into the 2010 account. Proft after tax only 1.5 millions (Including govt grants). Without grants is less than 500K out of revenue 34.6mil. Even given shareholders dividends is peanuts out of profit.  Enough for coffee  O if you are keen. DYDD. ",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 101,
            'thread_id' => 104,
            'body' => "Memiontec(SYM.SI)
            I like to highlight the definitions of BOOT and TOOT.
             
            If you want to invest in this company, it is important to understand these terms and where its recurring income will come from!
             
            https://www.investingnote.com/posts/2272345",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('threads')->insert([
            'user_id' => 102,
            'id' => 103,
            'question' => "SembCorp Marine- The new Frontier.",
            'body' => "Today (hopefully haha) may turn out to be the day the bears launch their final and failed assault.

            Fret not! Reinforment is already on the way - 9th & 10th Nov and arriving soon -
            
            https://www.straitstimes.com/business/economy/marine-and-offshore-sector-can-pivot-to-new-areas-chan
            
            
            ' The marine and offshore sector is facing challenging times, but it can still pivot to new areas for long-term growth, said Minister for Trade and Industry Chan Chun Sing yesterday.
            
            During a visit to marine engineering firm Sembcorp Marine, he said: \" It is perhaps a natural effect of the industry that there will be a cycle of peak and trough. Unfortunately, for us, at this point in time, we are going through a trough of the cycle, so the conditions are very challenging.\"
            
            https://www.businesstimes.com.sg/government-economy/6370-jobs-available-in-singapores-manufacturing-sector-josephine-teo
            \" Jobseekers and workers can look forward to taking on new and higher-value job roles created as a result of marine and offshore' s ongoing transformation efforts,\" Mrs Teo said. These include jobs like automation engineers, data scientists and process engineers. The industry employs 77,000 workers.
            
            And earlier (Oct 10th) Minister Ong YK was together with Maritime experts amongst them - CEO Wong WS...
            
            3 full ministers are positive, so the bears and short sellers are mad or what?",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('replies')->insert([
            'user_id' => 103,
            'thread_id' => 103,
            'body' => "So, when 3 ministers are upbeat on the Marine Sector and SMM, and yet the price is severely downbeaten, can we conclude that a false market has occurred? 
            A false market is a financial market that inaccurately represents the reality of the situation.
            Investors and traders rely on accurate information to make buying and selling decisions in the financial markets.
            A false market arises when prices are manipulated and impacted by information that is not true.
            Volatility is common in false markets as investors alter their decisions based on false information.
            Prices can be manipulated through the spread of false information, such as incorrect financial information, misrepresentation by the media, and more.
            SGX or MAS? is responsible for detecting and stopping false information, which can come with severe penalties.
            The good part is that though False markets usually result in losses for investors and other stakeholders, it can, however, sometimes result in a profit if an investor purchases a security at a depressed price when they believe it is severely undervalued, which might be because of the false information provided on it.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('threads')->insert([
            'user_id' => 102,
            'id' => 105,
            'question' => "ISDN A GROWTH STOCK IN 2021 AND BEYOND",
            'body' => "ALL FAIR MINDED CONTRIBUTORS ARE WELCOME TO SHARE THEIR IDEAS FOR THE BENEFIT OF READERS WHETHER THEY ARE TRADERS OR INVESTORS.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('threads')->insert([
            'user_id' => 101,
            'id' => 107,
            'question' => "EAGLE Hosp Reit US$ @$0.780 cents",
            'body' => "Eagle Hospitality Trust prices IPO offering@US$0.78 cents.    Eagle Hospitality Trust (EHT), is same as    Ara US H-Trust    in similar ways.  Los Angeles-based property investor and developer Urban Commons, has launched it listing on the mainboard of SGX Exchange. Comprising.......

            International placement  of 535.7 million stapled securities, including to institutional, and
            
            Public offering, 44.9 million stapled securities in Singapore.  EHT public offer of 26,562,900 stapled securities. No applications were received.crying It  Public subscription is under-subscribed. Is approximately 0.4 times.
            
            A total of 580.6 mil stapled securities are being offered. 
            
            Note: Public offer offering price in Sing dollars is, S$1.071, (exchange rate US$1.00 to S$1.3731.)
            
            EHT is a stapled group comprising  Eagle Hospitality Real Estate Investment Trust (EH-Reit) and Eagle Hospitality Business Trust (EH-BT). It has an initial portfolio of 18 full-service hotel properties, with a total of 5,420 rooms and an aggregate valuation of about US$1.27 billion. It assets span states in California, Texas, Colorado, Utah, Georgia, Florida, New Jersey and Connecticut. Seventeen of the 18 assets are freehold.
            
            Projected  -    annualised yield of 8.2% for the period from May 1, 2019 to Dec 31, 2019. 
            
            Post-IPO  -    Wealth mgt clients,  Gold Pot Developments Limited and  Ji Qi have are onboard as cornerstone investors, which will give them a collective stake of 16.7%. 
            
            IPO-ed gross proceeds of  US$565.8 million, will be used for  payment to vendors for purchase price of the initial portfolio, payment of the related acquisition costs of the initial portfolio, payment of issue and debt-related costs, as well as working capital.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('replies')->insert([
            'user_id' => 103,
            'thread_id' => 107,
            'body' => "https://links.sgx.com/FileOpen/Eagle%20Hospitality%20Trust%20-%20Allocation%20Announcement.ashx?App=Announcement& FileID=560725

            A victim of U.S. - China  on going trade war",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 107,
            'body' => "US tourism will be hit massively by absence of China and Asian tourists. Why go into the lair of belligerent hosts? Very evident when I visited the USA in November that Chinese tourists and groups were no where to be seen.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 107,
            'body' => "Trump and his followers are getting their just desserts, I suppose.  The Trade War is not limited to the Trade front. Investors will shun USA assets and services and tourism and education and products etc etc.  No one wins in an all out Trade War involving formidable foes like China and its allies.  USA has to learn the painful way I guess.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
