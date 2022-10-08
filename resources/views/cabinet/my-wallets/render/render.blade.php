<div class="col-md-12 mt-3" translate="no">
    <label class="form-label" translate="yes">Enter your wallet or card
        number</label>
    <input class="form-control form-input-main table-white form-input-main__big mb-lg-4 mb-3" autocomplete="off" name="wallet_number"
           type="text" value="{{ old('wallet_number',$myWallet->wallet_number) }}">
</div>
<div class="col-md-12 mt-3" translate="no">
    <label class="form-label" translate="yes">Tag/Memo</label>
    <input class="form-control form-input-main table-white form-input-main__big mb-lg-4 mb-3" autocomplete="off"
           name="tag" value="{{ old('tag',$myWallet->tag) }}" min="0" max="100" type="text"
           placeholder="optional">
</div>
<div class="col-md-12 mt-3" translate="no">
    <label class="form-label" translate="yes">PIN code</label>
    <input class="form-control form-input-main table-white form-input-main__big mb-lg-4 mb-3" autocomplete="off" name="pincode"
           minlength="4" maxlength="4"
           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
           pattern="[0-9]{4}" title="PIN must contain 4 digits" type="password"
    >
</div>

@if($myWallet->editing || $myWallet->editing === null)
<div class="my-sm-4 my-3 py-sm-1">
    <label class="d-flex align-center">
        <div class="switch-container">
            <input class="switch-input switch-flat d-none form-check-input" type="checkbox" value="0"
                   name="wallet_allow_edit">
            <label for="switch-flat">
                <span></span>
            </label>
        </div>
        <span class="form-check-label">Disable editing of <b>installed</b> wallets. <font
                    color="red">Irreversible action.</font></span>
    </label>
</div>

<div class="form-footer" style="margin-top: 1.1rem;">
    <button type="submit"  id="form" class="w-full btn btn-yellow btn-big text-uppercase btn-main btn-primary">
        Save
    </button>
</div>
@endif

















