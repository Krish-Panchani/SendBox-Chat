<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  include_once "config.php";
  $outgoing_id = $_SESSION['unique_id'];
  $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
  $output = "";
  $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
  $query = mysqli_query($conn, $sql);
  if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
      if ($row['outgoing_msg_id'] === $outgoing_id) {
        // $time = date('H:i', strtotime(' . $row['date_time'] . '));
        $output .= '
                    <div class="chat-message">
                    <div class="flex items-end justify-end">
                      <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 items-end">
                        <div><span class="text-base font-normal px-4 py-2 rounded-2xl inline-block rounded-br-none bg-blue-700 text-white max-w-xs min-w-xs max-h-screen break-all">' . nl2br(htmlspecialchars($row['msg']), false) . '</span></div>
                        <div class="flex justify-center items-center">
                        <span class="text-xs font-xs text-gray-400">' . date('h:i a', strtotime($row['date_time'])) . '
                        </span>
                        <button class="pl-1" type="button" onclick="delete_msg_fun(' . $row['msg_id'] . ');">
              <img class="w-3" src="php/images/delete_btn.svg" alt="delete btn">
              </button>
              <p id="results"></p>
            </div>
                      </div>
                      
                      </div>
                  </div>
                  ';
      } else {
        $output .= '

                    <div class="chat-message">
          <div class="flex items-end">
          <img src="php/images/pfp/' . $row['img'] . '" alt="My profile" class="w-6 h-6 rounded-2xl">
            <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 items-start">
              <div>
                <span class="text-base font-normal px-4 py-2 rounded-2xl inline-block rounded-bl-none bg-gray-100 text-gray-800">' . nl2br(htmlspecialchars($row['msg']), false) . '</span>
                </div>
                
              <span class="text-xs font-xs text-gray-400">' . date('h:i a', strtotime($row['date_time'])) . '
              </span>
              
            
            </div>
          </div>
        </div>';
      }
    }
  } else {
    $output .= '<div class="text-gray-300">No messages are available. Once you send message they will appear here.</div>';
  }
  echo $output;
} else {
  header("location: /sendbox");
}
