<?= $this->extend('layout/dashboard/default') ?>

<?= $this->section('title') ?>
<title>Ruang Diskusi &mdash; E-Speaking</title>
<?= $this->endSection() ?>

<?= $this->section('content-header') ?>
<h1>Ruang Berdiskusi &mdash; E-Speaking</h1>
<?= $this->endSection() ?>

<?= $this->section('content-body') ?>
<div class="row">
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4>Pengguna yang online</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled list-unstyled-border">
                    <?php
                    $userModel = new \App\Models\UserModel;
                    $users = $userModel->whereIn('role', ['siswa', 'mentor'])->findAll();

                    foreach ($users as $key => $user) : ?>
                        <li class="media">
                            <img alt="image" class="mr-3 rounded-circle" src="<?= base_url('template/assets/img/avatar/avatar-1.png') ?>" width="50">
                            <div class="media-body">
                                <div class="mt-0 mb-1 font-weight-bold"><a href=""><?= $user['name'] ?></a></div>
                                <div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i> Online</div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card chat-box" id="chatbox">
            <div class="card-header">
                <h4>Ruang Diskusi</h4>
            </div>

            <div class="card-body chat-content" style="overflow: hidden; outline: currentcolor none medium;" tabindex="2">
                <?php

                $chatModel = new \App\Models\ChatModel;

                $chats = $chatModel->findAll();

                foreach ($chats as $key => $chat) : ?>

                    <?php
                    $isTheLoggedUser = ($chat['from_user_id'] == session('user_id'));
                    $user = $userModel->find($chat['from_user_id']); ?>

                    <div class="chat-item <?= $isTheLoggedUser ? 'chat-right' : 'chat-left' ?>">
                        <div class="chat-details">
                            <div class="chat-text">
                                <?php
                                if ($isTheLoggedUser) {
                                    echo '';
                                } else if ($user['role'] == 'mentor') {
                                    echo "<strong> {$user['name']} (mentor) </strong> <br />";
                                } else if ($user['role'] == 'siswa') {
                                    echo "<strong> {$user['name']} </strong> <br />";
                                }
                                echo $chat['message'];
                                ?>
                            </div>
                            <div class="chat-time"><?= $chat['timestamp'] ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="card-footer chat-form">
                <form id="chat-form">
                    <input type="text" class="form-control" placeholder="Type a message">
                    <button class="btn btn-primary">
                        <i class="far fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    var conn = new WebSocket('ws://localhost:9090');
    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    conn.onmessage = function(e) {
        console.log(e.data);
        var data = JSON.parse(e.data);
        $.chatCtrlReceive('#chatbox', {
            fromUserName: data.fromUserName,
            text: data.message,
        });
    };

    $("#chat-form").submit(function() {
        var me = $(this);
        var msg = me.find('input').val();

        if (msg.trim().length > 0) {
            var data = {
                fromUserId: <?= session('user_id') ?>,
                fromUserName: "<?= session('user_name') ?>",
                message: msg,
            };

            conn.send(JSON.stringify(data));

            $.chatCtrl('#chatbox', {
                fromUserId: data.fromUserId,
                text: data.message,
            });

            me.find('input').val('');
        }
        return false;
    });
</script>


<?= $this->endSection() ?>