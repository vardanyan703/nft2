<div class="modal modal-coin" id="modal-coin">
    <div class="modal-inner">
        <div class="modal__container">
            <div class="modal__close close">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.42333 1.10131C9.29015 0.966229 9.07446 0.966229 8.94128 1.10131L6.00037 4.08426L3.05969 1.10131C2.92651 0.966229 2.71083 0.966229 2.57765 1.10131L1.10037 2.5997C0.967193 2.73479 0.967193 2.95355 1.10037 3.08864L3.97072 6L1.10037 8.91137C0.967193 9.04645 0.967193 9.26521 1.10037 9.4003L2.57765 10.8987C2.71083 11.0338 2.92651 11.0338 3.05969 10.8987L6.00037 7.91574L8.94128 10.8987C9.07446 11.0338 9.29015 11.0338 9.42333 10.8987L10.9006 9.40007C11.0338 9.26498 11.0338 9.04622 10.9006 8.91113L8.03049 6L10.9006 3.08887C11.0338 2.95378 11.0338 2.73502 10.9006 2.59993L9.42333 1.10131Z"
                        fill="#231F20"/>
                </svg>
            </div>
            <div class="modal__body">
                <div class="modal__success pb-1">
                    <img src="{{  asset("assets/cabinet/style/default/img/ps/". $images[$coin->network]) }}" width="48" height="48"  alt="">
                </div>
                <div class="modal__title title title-line">
                    Top up
                    <span class="show-coins">
                        <span class="show-coins__inner">
                                  {{ $coin->network }}
                                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.3933 2.75319C11.2224 2.58227 10.9456 2.58227 10.7747 2.75319L7.0005 6.52735L3.22663 2.75319C3.05571 2.58227 2.77892 2.58227 2.60801 2.75319L0.712172 4.64902C0.541255 4.81994 0.541255 5.09673 0.712172 5.26765L6.69134 11.2468C6.77651 11.3326 6.8885 11.3751 7.0005 11.3751C7.1125 11.3751 7.22451 11.3326 7.30996 11.2471L13.2891 5.26794C13.46 5.09702 13.46 4.82023 13.2891 4.64931L11.3933 2.75319Z"
                                    fill="#14151B"/>
                              </svg>
                          </span>
                        <span class="show-coins__select" style="display: none;">
                         <span class="show">
                            <select id='social' name="states[]" multiple="multiple">
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                            <option data-img="btc.jpg" value='BTC'>BTC</option>
                          </select>
                         </span>
                    </span>
                    </span>
                </div>
                <div class="modal__form-item">
                    <div class="modal__form-label">Enter amount</div>
                    <div class="modal__form-item__inner">
                        <input type="text" class="modal__form-inner" value="0.00003030">
                        <div class="modal__form-inner__price">$1 038.22</div>
                        <div class="modal__form-inner__left">
                            <div class="modal__form-inner-svg">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.6673 11.0035L13.3049 13.3658V7.20631C13.3049 6.81031 12.9835 6.48892 12.5875 6.48892C12.1915 6.48892 11.8702 6.81031 11.8702 7.20631V13.3658L9.50778 11.0035C9.228 10.7233 8.77318 10.7233 8.49339 11.0035C8.21325 11.2836 8.21325 11.7377 8.49339 12.0179L12.0803 15.6048C12.2202 15.7451 12.4039 15.815 12.5875 15.815C12.7712 15.815 12.9549 15.7451 13.0947 15.6048L16.6817 12.0179C16.9618 11.7377 16.9618 11.2836 16.6817 11.0035C16.4019 10.7233 15.9471 10.7233 15.6673 11.0035ZM12.5875 2.18457C12.3973 2.18457 12.2148 2.26015 12.0803 2.39469C11.9457 2.52923 11.8702 2.7117 11.8702 2.90196C11.8702 3.09223 11.9457 3.2747 12.0803 3.40923C12.2148 3.54377 12.3973 3.61935 12.5875 3.61935C12.7778 3.61935 12.9603 3.54377 13.0948 3.40923C13.2294 3.2747 13.3049 3.09223 13.3049 2.90196C13.3049 2.7117 13.2294 2.52923 13.0948 2.39469C12.9603 2.26015 12.7778 2.18457 12.5875 2.18457ZM12.5875 4.33674C12.3973 4.33674 12.2148 4.41233 12.0803 4.54686C11.9457 4.6814 11.8702 4.86387 11.8702 5.05414C11.8702 5.2444 11.9457 5.42687 12.0803 5.56141C12.2148 5.69594 12.3973 5.77153 12.5875 5.77153C12.7778 5.77153 12.9603 5.69594 13.0948 5.56141C13.2294 5.42687 13.3049 5.2444 13.3049 5.05414C13.3049 4.86387 13.2294 4.6814 13.0948 4.54686C12.9603 4.41233 12.7778 4.33674 12.5875 4.33674ZM4.69624 4.63374V10.7933C4.69624 11.1893 5.01763 11.5107 5.41363 11.5107C5.80963 11.5107 6.13102 11.1893 6.13102 10.7933V4.63374L8.49339 6.99611C8.63329 7.13636 8.81694 7.20631 9.00059 7.20631C9.18424 7.20631 9.36789 7.13636 9.50778 6.99611C9.78793 6.71597 9.78793 6.26186 9.50778 5.98172L5.92083 2.39477C5.64105 2.11462 5.18622 2.11462 4.90644 2.39477L1.31948 5.98172C1.03934 6.26186 1.03934 6.71597 1.31948 6.99611C1.59926 7.27626 2.05409 7.27626 2.33387 6.99611L4.69624 4.63374ZM5.41363 14.3802C5.22337 14.3802 5.0409 14.4558 4.90636 14.5903C4.77182 14.7249 4.69624 14.9073 4.69624 15.0976C4.69624 15.2879 4.77182 15.4703 4.90636 15.6049C5.0409 15.7394 5.22337 15.815 5.41363 15.815C5.6039 15.815 5.78637 15.7394 5.92091 15.6049C6.05544 15.4703 6.13102 15.2879 6.13102 15.0976C6.13102 14.9073 6.05544 14.7249 5.92091 14.5903C5.78637 14.4558 5.6039 14.3802 5.41363 14.3802ZM5.41363 12.228C5.22337 12.228 5.0409 12.3036 4.90636 12.4382C4.77182 12.5727 4.69624 12.7552 4.69624 12.9454C4.69624 13.1357 4.77182 13.3182 4.90636 13.4527C5.0409 13.5872 5.22337 13.6628 5.41363 13.6628C5.6039 13.6628 5.78637 13.5872 5.92091 13.4527C6.05544 13.3182 6.13102 13.1357 6.13102 12.9454C6.13102 12.7552 6.05544 12.5727 5.92091 12.4382C5.78637 12.3036 5.6039 12.228 5.41363 12.228Z"
                                        fill="#2C2E3C"/>
                                </svg>
                            </div>
                            <div class="modal__form-inner-text">
                                {{ $coin->network }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__btn modal__btn-bottom btn btn-primary mb-0">
                    Top up
                </div>
                <div class="modal__form-coin">1 {{ $coin->network }} =
                    ${{ \App\Facades\CryptoFacade::xChangeToUSDT(1,$coin->network) }}</div>
            </div>
        </div>
    </div>
</div>
