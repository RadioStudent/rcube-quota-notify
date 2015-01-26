<?php

class quota_popup extends rcube_plugin {
  public $task = 'mail';

  function init() {
    $this->add_hook('quota', array($this, 'quota_warning_message'));
  }

  function quota_warning_message($args) {
    $rcmail = rcmail::get_instance();

    if($args['percent'] > 99) {
      $rcmail->output->show_message('Tvoj poštni predal je POLN in ne moreš prejemati nove pošte! Izprazni koš, počisti ostale mape in-ali prosi za povečanje na <a href="mailto:podpora@radiostudent.si">podpora@radiostudent.si</a>', 'error');
    } elseif($args['percent'] > 90) {
      $rcmail->output->show_message('Tvoj poštni predal je skoraj poln: ' . $args['percent'] . '%. Izprazni koš, počisti ostale mape in/ali prosi za povečanje na <a href="mailto:podpora@radiostudent.si">podpora@radiostudent.si</a>', 'warning');
    }

  }
}
?>
