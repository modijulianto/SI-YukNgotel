<div class="hotel-reservation--area mb-100">
    <form action="#" method="post">
        <div class="form-group mb-30">
            <label for="checkInDate">Date</label>
            <div class="input-daterange" id="datepicker">
                <div class="row no-gutters">
                    <div class="col-6">
                        <input type="text" class="input-small form-control" id="checkInDate" name="checkInDate" placeholder="Check In">
                    </div>
                    <div class="col-6">
                        <input type="text" class="input-small form-control" name="checkOutDate" placeholder="Check Out">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group mb-30">
            <label for="guests">Guests</label>
            <div class="row">
                <div class="col-6">
                    <select name="adults" id="guests" class="form-control">
                        <option value="adults">Guests</option>
                        <?php $max = $max_guest['max_guest']; ?>
                        <?php for ($i = 1; $i <= $max; $i++) { ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group mb-50">
            <div class="slider-range">
                <div class="range-price">Max Price: Rp.0 - Rp.<?= $max_cost['max_tarif']; ?></div>
                <div data-min="0" data-max="<?= $max_cost['max_tarif']; ?>" data-unit="Rp." class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="<?= $max_cost['max_tarif']; ?>" data-label-result="Max Price: ">
                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn roberto-btn w-100">Check Available</button>
        </div>
    </form>
</div>