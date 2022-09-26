<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
           'list' => [
              [
                 'question' => 'What is NFT ?',
                 'answer' => 'NFT is a type of tokens that allows you to digitize any goods. You can earn money with them with your creativity or just experiment with new technology.',
                 'left' => 1,
                 'right' => 0,
              ],
              [
                 'question' => 'How can I earn on an NFT token ?',
                 'answer' => 'You just need to register on our platform, choose a token and buy it. After that, your token will begin to bring you profit according to the condition for this token.',
                 'left' => 1,
                 'right' => 0,
              ],
              [
                 'question' => 'How do I register ?',
                 'answer' => 'Click the "Register" button, a registration form will open in front of you
                                            in which you need to carefully fill in all the fields. After filling out the
                                            form, click the "Complete registration" button. If everything is done
                                            correctly, your personal account will open in front of you.',
                 'left' => 1,
                 'right' => 0,
              ],
              [
                 'question' => 'After registration, what should I do ?',
                 'answer' => 'First of all, you need to save your payment details. To do this, go to the
                                            "My Wallets" section and save your payment details. You can save only those
                                            from which you will pay for tokens.',
                 'left' => 1,
                 'right' => 0,
              ],
              [
                 'question' => 'How to buy a token ?',
                 'answer' => 'Go to the "Buy token" section, then select the necessary token, select the
                                            payment system with which you will pay for the token, specify the amount and
                                            click the "Pay token" button. Then follow the prompts of the payment system.',
                 'left' => 1,
                 'right' => 0,
              ],
              [
                 'question' => 'Paid(a) for the token, but it didn\'t open, what should I do ?',
                 'answer' => 'If you paid for the token using cryptocurrency, the delay in opening the
                                            token after payment may take from 10 minutes to 2 hours. If your token has
                                            not been opened after 2 hours, write to us in support.',
                 'left' => 0,
                 'right' => 1,
              ],
              [
                 'question' => 'After the token is closed, what happens ?',
                 'answer' => 'When your token gets the status "Closed", all the profitability on it goes
                                            to your internal account in your personal account.',
                 'left' => 0,
                 'right' => 1,
              ],
              [
                 'question' => 'Do you have a reinvestment function ?',
                 'answer' => 'Yes, you can buy a new token from the funds in your internal account. To do
                                            this, go to the "My tokens" section and you will see a form for buying
                                            tokens at the top.',
                 'left' => 0,
                 'right' => 1,
              ],
              [
                 'question' => 'How do I order a payout ?',
                 'answer' => 'Go to the "Withdrawal of funds" section, select the required account and the
                                            details you previously saved and specify the amount available on the
                                            internal balance, then click the "Apply" button. Your funds will be credited
                                            to you within 1 minute to 2 hours, depending on the payment method.',
                 'left' => 0,
                 'right' => 1,
              ],
              [
                 'question' => 'What is an affiliate program ?',
                 'answer' => 'This is a program where you can earn extra money by inviting new members to
                                            our platform. It is enough for you to share your referral link with your
                                            friends or acquaintances, and if they follow your link to our website and
                                            buy a token, you will be credited 10% of the token value to your internal
                                            account.',
                 'left' => 0,
                 'right' => 1,
              ],
           ]
        ];

        Faq::query()->create($data);
    }
}
