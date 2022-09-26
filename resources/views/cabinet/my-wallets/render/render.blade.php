<div class="col-md-12 mt-3" translate="no">
    <label class="form-label" translate="yes">Enter your wallet or card
        number</label>
    <input class="form-control" autocomplete="off" name="wallet_number"
           type="text" value="{{ old('wallet_number',$myWallet->wallet_number) }}">
</div>
<div class="col-md-12 mt-3" translate="no">
    <label class="form-label" translate="yes">Tag/Memo</label>
    <input class="form-control" autocomplete="off"
           name="tag" value="{{ old('tag',$myWallet->tag) }}" min="0" max="100" type="text"
           placeholder="optional">
</div>
<div class="col-md-12 mt-3" translate="no">
    <label class="form-label" translate="yes">PIN code</label>
    <input class="form-control" autocomplete="off" name="pincode"
           minlength="4" maxlength="4"
           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
           pattern="[0-9]{4}" title="PIN must contain 4 digits" type="password"
    >
</div>

@if($myWallet->editing || $myWallet->editing === null)
<div class="mt-3">
    <label class="form-check form-switch">
        <input class="form-check-input" type="checkbox" value="0"
               name="wallet_allow_edit">
        <span class="form-check-label">Disable editing of <b>installed</b> wallets. <font
                    color="red">Irreversible action.</font></span>
    </label>
</div>

<div class="form-footer" style="margin-top: 1.1rem;">
    <button type="submit"  id="form" class="btn btn-primary"><i
                class="bi bi-chevron-compact-right"></i> Save
    </button>
</div>
@endif

















