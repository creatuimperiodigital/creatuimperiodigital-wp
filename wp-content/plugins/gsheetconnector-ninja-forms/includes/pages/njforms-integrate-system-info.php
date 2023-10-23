<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
   exit();
}
$njforms_gs_tools_service = new NJforms_Gsheet_Connector_Init();
?>
<div class="system-statuswc">
   <div class="system-info-container">
      <button onclick="copySystemInfo()" class="copy">Copy</button>
      <?php echo $njforms_gs_tools_service->get_njforms_system_info(); ?>
   </div>
</div>
<style>
.system-statuswc {
  font-family: Arial, sans-serif;
  margin: 30px;

}


.system-statuswc h2 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.system-statuswc table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

.system-statuswc th,
.system-statuswc td {
  padding: 10px;
  text-align: left;
  border: 1px solid #ccc;
}

.system-statuswc th {
  font-weight: bold;
  background-color: #f2f2f2;
}

.system-statuswc tr:nth-child(even) {
  background-color: #f9f9f9;
}

.system-statuswc td:first-child {
  font-weight: bold;
}

.system-statuswc td[colspan="2"] {
  font-style: italic;
}

.system-statuswc .active-plugins-table td:first-child {
  font-weight: normal;
}

.system-statuswc .active-plugins-table td:last-child {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.copy-success-message {
   position: fixed;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   padding: 10px;
   background-color: #4CAF50;
   color: #fff;
   font-weight: bold;
   border-radius: 4px;
   z-index: 9999;
}
.copy {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

.copy:hover {
  background-color: #45a049;
}

.copy:focus {
  outline: none;
}


</style>

<script>
   function copySystemInfo() {
      const systemInfoContainer = document.querySelector('.system-info-container');
      const systemInfo = systemInfoContainer.innerText;

      navigator.clipboard.writeText(systemInfo)
         .then(() => {
            const messageElement = document.createElement('div');
            messageElement.textContent = 'System info copied!';
            messageElement.classList.add('copy-success-message');
            document.body.appendChild(messageElement);

            setTimeout(() => {
               messageElement.remove();
            }, 3000);
         })
         .catch((error) => {
            console.error('Unable to copy system info:', error);
         });
   }

</script>