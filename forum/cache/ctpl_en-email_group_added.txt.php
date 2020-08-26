<?php if (!defined('IN_PHPBB')) exit; ?>Subject: You have been added to this usergroup

Congratulations,

You have been added to the "<?php echo (isset($this->_rootref['GROUP_NAME'])) ? $this->_rootref['GROUP_NAME'] : ''; ?>" group on "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>".
This action was done by a group leader or the site administrator, contact them for more information.

You can view your groups information here:
<?php echo (isset($this->_rootref['U_GROUP'])) ? $this->_rootref['U_GROUP'] : ''; ?>


<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>