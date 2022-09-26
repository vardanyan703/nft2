<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Orchid\Attachment\File;

class NewsSeeder extends Seeder
{
   /**
    * @throws \League\Flysystem\FilesystemException
    */
    public function run()
    {
        $data = [
           [
              'name' => 'News 14.07.2022 NFTMainer',
              'text' => 'A new token is open and available for purchase<br>Paddy 114% after 24 hours. Min 20 Max $30
                        Open. It is allowed to buy a token once every 24 hours<br>Token Digital 112% after 24 hours is
                        also available for investment<br>It is allowed to buy all open tokens for a total of $50',
           ],
           [
              'name' => 'NFT NEWS',
              'text' => 'Subscribe to our telegram channel so as not to miss the opening of new tariffs <a
                        href="/t.me/nftmainer_info.html">https://t.me/NFTMAINER_INFO</a>',
           ],
           [
              'name' => 'NFT News 15.07.2022',
              'text' => '<div><br>A new token is open and available for purchase<br>Rasta 116% after 24 hours. Min 30 Maх
                            50 $ Open. Allowed to buy a token 1 time every 24h&nbsp;<br>Token Digital 112% and Paddy
                            114% in 24 hours are also available for investment<br>It is allowed to buy all open tokens
                            for a total of $100, 30$+20$+50$
                        </div>
                        <div>New cryptocurrencies are open and available for investment<br>Ripple Minimum withdrawal
                            20rxp<br>Tether ERC20 Minimum withdrawal 10usd
                        </div>
                        <div>NFT Новости 15.07.2022&nbsp;<br>Новый токен открыт и доступен для покупки<br>Раста 116%
                            через 24 часа. Мин 30 Макс 50 $ Открыто. Разрешено покупать токен 1 раз в 24 часа<br>Токен
                            Цифровой 112% и Paddy 114% через 24 часа так же доступны для инвестирования<br>Разрешено
                            купить все открытые токены на общую сумму 100$, 20$+30$+50$
                        </div>
                        <div>Открыты новые криптовалюты и доступны для инвестирования<br>Ripple Миниммальный вывод 20rxp<br>Tether
                            ERC20 Мимальный вывод 10usd
                        </div>',
           ],
           [
              'name' => 'NFT News 16.07.2022',
              'text' => '<div>The new token is open and available for purchase<br>Volcano 118% after 24 hours. Min. 40
                            Max $100 Open. It is allowed to buy a token once every 24 hours
                        </div>
                        <div>It is allowed to buy all open tokens for a total of 200$, 20$+30$+50$+100$</div>
                        <div>Payeer USD payment system connected</div>',
           ],
           [
              'name' => 'NFT News 17.07.2022',
              'text' => '<div>The new token is open and available for purchase<br>Cerberus 120% after 24 hours. Min 50
                            max $200 Allowed to buy a token once every 24 hours<br>It is allowed to buy all open tokens
                            for a total of 400$, 20$+30$+50$+100$+200$
                        </div>
                        <div>Bitcoin payment system connected</div>',
           ],
           [
              'name' => 'important information',
              'text' => '<div>Dear partners, if you withdraw money and it is processed, then you have the wrong wallet
                            number, we monitor this in the admin panel and return the money to the balance, change the
                            wallet yourself and make a withdrawal again.
                        </div>
                        <div>&nbsp;</div>
                        <div>Уважаемые партнеры, если вы выводите деньги и они обрабатываются, значит у вас неверный
                            номер кошелька, мы это мониторим в админке и возвращаем деньги на баланс, сами меняете
                            кошелек и снова делаете вывод.
                        </div>',
           ],
           [
              'name' => 'NFT NEWS 18/07/2022',
              'text' => '<div>Dear partners, STRONGLY DO NOT RECOMMEND using cryptocurrencies inside the Payeer e-wallet,
                            use only USD, they have been in technical work for the third day already. We apologize for
                            the inconvenience, but there is nothing we can do about it. You can discuss all frozen
                            cryptocurrency transactions with Payeer wallet support, as soon as they restore their work,
                            the funds will be credited to your account
                        </div>
                        <div><br>Уважаемые партеры, КАТЕГОРИЧЕСКИ НЕ РЕКОМЕНДУЕМ пользоваться криптовалютой внутри
                            электронного кошелька Payeer, используйте только USD, у них третий день уже технические
                            работы. Мы приносим извинения за предоставленные неудобства но ни чего не можем с этим
                            сделать. Все зависшие транзакции по криптовалюте можете обсудить с поддержкой Payeer
                            кошелька, как только они восстановят свою работу средства будут зачислены на свой счет
                        </div>',
           ],
           [
              'name' => 'NFT NEWS 18/07/2022',
              'text' => '<div><br>The new token is open and available for purchase<br>Ferocious 122% after 24 hours.
                            Minimum 70, Maximum 400$ Open. It is allowed to buy a token 1 time every 24 hours
                        </div>
                        <div>It is allowed to buy all open tokens for a total of 800$, 20$+30$+50$+100$+200$+400$</div>
                        <div>Ethereum payment system connected</div>
                        <div>&nbsp;</div>
                        <div><br>Новый токен открыт и доступен для покупки<br>Свирепый &nbsp;122% через 24 часа. Минимум
                            70, Максимум 400$ Открыто. Разрешено покупать токен 1 раз каждые 24 часа
                        </div>
                        <div>Разрешено купить все открытые токены на общую сумму 800$, 20$+30$+50$+100$+200$+400$</div>
                        <div>Подключена платежная система Ethereum</div>',
           ],
           [
              'name' => 'NFT NEWS 19/07/2022',
              'text' => '<div><br>The new token is open and available for purchase<br>Eduardo 124% after 24 hours. Min 90
                            Maх 800$ &nbsp;Open. &nbsp;Allowed to buy a token 1 time every 24 hours<br>It is allowed to
                            buy all open tokens for a total of 1600$, 20$+30$+50$+100$+200$+400$+800$
                        </div>
                        <div>Dash payment system connected</div>
                        <div>&nbsp;</div>
                        <div><br>Новый токен открыт и доступен для покупки<br>Эдуардо 124% через 24 часа. Минимум 90,
                            Максимум 800$ Открыто. Разрешено покупать токен 1 раз каждые 24 часа&nbsp;<br>Разрешено
                            купить все открытые токены на общую сумму 800$, 20$+30$+50$+100$+200$+400$
                        </div>
                        <div>Подключена платежная система Dash</div>',
           ],
           [
              'name' => 'NFT News 20.07.2022',
              'text' => '<div>NFT News 20.07.2022<br>The new token is open and available for purchase<br>Green Beast 126%
                            after 24 hours. Min 100 Maх 1500 $ Open. Allowed to buy a token 1 time every 24h<br>It is
                            allowed to buy all open tokens for a total of 3100$, 20$+30$+50$+100$+200$+400$+800$+1500
                        </div>
                        <div>payment system connected Dogecoin</div>
                        <div>Новый токен открыт и доступен для покупки<br>Зеленый зверь 126% через 24 часа. Мин. 100 мах
                            1500 $ Открыто. Разрешено покупать токен 1 раз в 24 часа<br>Разрешено купить все открытые
                            токены на общую сумму 3100$, 20$+30$+50$+100$+200$+400$+800+1500
                        </div>
                        <div>Подключена платежная система Dogecoin</div>',
           ],









        ];

       foreach ($data as $key => $item) {
          $file = new UploadedFile(public_path('tmp/news/news.png'),'news.png');
          $attachment = (new File($file))->load();

          $tariff = News::create($item);
          $tariff->attachment()->sync($attachment->id);
       }
    }
}
