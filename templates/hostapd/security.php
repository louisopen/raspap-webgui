<div class="tab-pane fade" id="security">
  <h4 class="mt-3"><?php echo _("Security settings"); ?></h4>
  <div class="row">
    <div class="col-md-6">
      <div class="mb-3">
        <label for="cbxwpa"><?php echo _("Security type"); ?></label>
        <?php SelectorOptions('wpa', $arrSecurity, $arrConfig['wpa'], 'cbxwpa'); ?>
      </div>
      <div class="mb-3">
        <label for="cbxwpapairwise"><?php echo _("Encryption Type"); ?></label>
        <?php SelectorOptions('wpa_pairwise', $arrEncType, $arrConfig['wpa_pairwise'], 'cbxwpapairwise'); ?>
      </div>
      <label for="txtwpapassphrase"><?php echo _("PSK"); ?></label>
      <div class="input-group has-validation">
        <input type="text" class="form-control" id="txtwpapassphrase" name="wpa_passphrase" value="<?php echo htmlspecialchars($arrConfig['wpa_passphrase'], ENT_QUOTES); ?>" aria-describedby="gen_wpa_passphrase" required />
        <div class="input-group-text" id="gen_wpa_passphrase"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
        <div class="invalid-feedback">
          <?php echo _("Please provide a valid PSK."); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6 mt-3">
      <figure class="figure">
        <img src="app/img/wifi-qr-code.php" class="figure-img img-fluid" alt="RaspAP Wifi QR code" style="width:100%;">
        <figcaption class="figure-caption"><?php echo _("Scan this QR code with your phone to connect to this RaspAP."); ?></figcaption>
      </figure>
    </div>
  </div>
</div><!-- /.tab-pane | security tab -->
