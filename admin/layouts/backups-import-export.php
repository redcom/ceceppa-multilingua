<?php
//wp_enqueue_script( 'plugin-install' );
//add_thickbox();

function cml_admin_box_backup_export() {
?>
  <input type="hidden" name="action" value="ceceppaml_export_backup" />
  <div id="minor-publishing">
      <?php _e( 'Select what do you want to backup:', 'ceceppaml' ) ?>
      <ul class="cml-ul-list">
          <li>
              <?php echo cml_utils_create_checkbox( "Tables", "cml-tables", "cml-tables", null, 1, 1 ) ?>
          </li>
          <li>
              <?php echo cml_utils_create_checkbox( "Settings", "cml-settings", "cml-settings", null, 1, 1 ) ?>
          </li>
      </ul>

      <div class="cml-submit-button" style="height: 30px">
        <div class="wpspinner">
          <span class="spinner"></span>
        </div>
        <?php submit_button( __( 'Export', 'ceceppaml' ), "button-primary", "action", false, 'class="button button-primary"' ); ?>
      </div>

      <div style="clear: both"></div>
  </div>
  <div id="major-publishing-actions" class="cml-description">
      <p>
        <?php _e( 'Use this option to manually backup your plugin data and settings.', 'ceceppaml' ); ?><br />
        <?php printf( __( 'The backup will stored in <i>%s</i> folder', 'ceceppaml' ), CECEPPAML_BACKUP_PATH ); ?><br />
      </p>
  </div>

<?php
}

function cml_admin_box_backup_import() {
?>
  <input type="hidden" name="action" value="ceceppaml_import_backup" />
  <div id="minor-publishing">
      <?php _e( 'Select files to import:', 'ceceppaml' ) ?>
      <ul class="cml-ul-list">
          <li>
              <?php _e( 'Database ( *.sql )', 'ceceppaml' ) ?>
              <blockquote>
                  <input type="file" name="database" />
              </blockquote>
          </li>
          <li>
              <?php _e( 'Settings ( *.settings )', 'ceceppaml' ) ?>
              <blockquote>
                  <input type="file" name="settings" />
              </blockquote>
          </li>
          <li>
              <?php _e( 'Settings extra ( *.extra )', 'ceceppaml' ) ?>
              <blockquote>
                  <input type="file" name="sextra" />
              </blockquote>
          </li>
      </ul>

      <div class="cml-submit-button" style="height: 30px">
        <div class="wpspinner">
          <span class="spinner"></span>
        </div>
        <?php submit_button( __( 'Import', 'ceceppaml' ), "button-primary", "action", false, 'class="button button-primary"' ); ?>
      </div>

      <div style="clear: both"></div>
  </div>
  <div id="major-publishing-actions" class="cml-description">
      <p>
        <?php _e( 'Use this option to manually backup your plugin data and settings.', 'ceceppaml' ); ?><br />
        <?php printf( __( 'The backup will stored in <i>%s</i> folder', 'ceceppaml' ), CECEPPAML_BACKUP_PATH ); ?><br />
      </p>
  </div>

<?php
}

//add_meta_box( 'cml-box-backup', __( 'Backup', 'ceceppaml' ), 'cml_admin_box_backup', 'cml_box_backup' );
$help = __( 'Show/Hide help', 'ceceppaml' );

add_meta_box( 'cml-box-backup-import', '<span class="cml-icon cml-icon-backup "></span>' . __( 'Import', 'ceceppaml' ) . "<span class=\"cml-help tipsy-w\" title=\"$help\"></span>", 'cml_admin_box_backup_import', 'cml_box_backup' );
add_meta_box( 'cml-box-backup-export', '<span class="cml-icon cml-icon-backup "></span>' . __( 'Export', 'ceceppaml' ) . "<span class=\"cml-help tipsy-w\" title=\"$help\"></span>", 'cml_admin_box_backup_export', 'cml_box_backup' );
