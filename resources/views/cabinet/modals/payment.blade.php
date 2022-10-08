<div class="modal modal-number-{{ $transaction->id }}" id="buy-modal">
    <div class="modal-inner">
        <div class="modal__container">
            <div class="modal__header">
                <div class="modal__title modal__title-big title title-line">Payment information</div>
                <div class="modal__close close" data-open="#buy-modal">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.42333 1.10131C9.29015 0.966229 9.07446 0.966229 8.94128 1.10131L6.00037 4.08426L3.05969 1.10131C2.92651 0.966229 2.71083 0.966229 2.57765 1.10131L1.10037 2.5997C0.967193 2.73479 0.967193 2.95355 1.10037 3.08864L3.97072 6L1.10037 8.91137C0.967193 9.04645 0.967193 9.26521 1.10037 9.4003L2.57765 10.8987C2.71083 11.0338 2.92651 11.0338 3.05969 10.8987L6.00037 7.91574L8.94128 10.8987C9.07446 11.0338 9.29015 11.0338 9.42333 10.8987L10.9006 9.40007C11.0338 9.26498 11.0338 9.04622 10.9006 8.91113L8.03049 6L10.9006 3.08887C11.0338 2.95378 11.0338 2.73502 10.9006 2.59993L9.42333 1.10131Z"
                            fill="#231F20"/>
                    </svg>
                </div>
            </div>
            <div class="modal__body">
                <div class="modal__body-list">
                    <div class="modal__body-item">
                        <div class="modal__body-left">Status</div>
                        <div class="modal__body-right status_text">{{ $transaction->status_text ? $transaction->status_text :  'Waiting for buyer funds...' }}</div>
                    </div>
                    <div class="modal__body-item">
                        <div class="modal__body-left">Total Amount To Send:</div>
                        <div class="modal__body-right price_text"  style="cursor: pointer" data-clipboard-text='{{ $transaction->amount2  }}'>
                            {{ $transaction->amount2 . ' ' .$transaction->currency1 . '(total confirms needed: ' . $transaction->confirms_needed. ')' }}
                        </div>
                    </div>
                    <div class="modal__body-item">
                        <div class="modal__body-left">Received So Far:</div>
                        <div class="modal__body-right received">
                            {{ $transaction->received_amount ? $transaction->received_amount : '0.00000' . ' ' . $transaction->currency1 }}
                        </div>
                    </div>
                    <div class="modal__body-item">
                        <div class="modal__body-left">Balance Remaining:</div>
                        <div class="modal__body-right qr_text copy_qr" style="cursor: pointer" data-clipboard-text='{{ $transaction->amount2  }}'>
                           {{ $transaction->amount2 . ' ' . $transaction->currency1 }}
                            <div class="modal__body-right__img " >
                                <img src="{{ $transaction->qrcode_url }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal__body-item">
                        <div class="modal__body-left">Send To Address:</div>
                        <div class="modal__body-right address modal_copy_button" style="cursor: pointer" data-clipboard-text='{{ $transaction->address }}'>{{ $transaction->address }}
                            {{ $transaction->dest_tag ? ' with the Destination Tag set to ' . $transaction->dest_tag : '' }}
                        </div>
                    </div>
                    <div class="modal__body-item">
                        <div class="modal__body-left">Time Left For Us to Confirm Funds:</div>
                        <div class="modal__body-right modal_time"></div>
                    </div>
                </div>
                <div class="btn btn-big btn-yellow btn-main text-uppercase mb-2 buy w-full have_paid" data-open="#buy-modal">
                    I have paid
                </div>
                <p class="modal-more">Need help? <a href="{{ route('cabinet.support.index') }}">Contact Us</a></p>
            </div>
        </div>
    </div>
</div>

<script>
    $(function (){

        window.$transaction_id = '{{ $transaction->id }}'
      //  $('#buy-modal img').prop('src', res.data.qrcode_url)
      //  let address = res.data.address;

       // if (res.data.dest_tag) {
      //      address += ' with the Destination Tag set to ' + res.data.dest_tag;
       // }
       // $('#buy-modal .address').text(address)



        //$('#buy-modal .status_text').text(status_text)

        //$('#buy-modal .price_text').text(res.data.amount2 + ' ' + res.data.currency1 + '(total confirms needed: ' + res.data.confirms_needed + ')');

        //$('#buy-modal .received').text(res.data.received_amount + ' ' + res.data.currency1);

      //  $('#buy-modal .qr_text').text(res.data.amount2 + ' ' + res.data.currency1);


        var countDownDate = moment('{{ $transaction->created_at }}').add('{{ $transaction->timeout }}', 's');
        window.x = setInterval(
            function () {
                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                let ti = days + "d " + hours + "h "
                    + minutes + "m " + seconds + "s ";

                $('#buy-modal .modal_time').text(ti)

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(window.x);
                    $('#buy-modal .modal_time').text("EXPIRED");
                }
            }, 1000);
    })
</script>
