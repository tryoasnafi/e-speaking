/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";
$.chatCtrlReceive = function (element, chat) {
    var chat = $.extend({
        position: 'chat-left',
        fromUserName: '',
        text: '',
        time: moment(new Date().toISOString()).format('hh:mm'),
        picture: '',
        type: 'text', // or typing
        timeout: 0,
        onShow: function () { }
    }, chat);

    var target = $(element),
        element = '<div class="chat-item ' + chat.position + '" style="display:none">' +
            '<div class="chat-details">' +
            '<div class="chat-text"> <strong>' + chat.fromUserName + '</strong> <br />' + chat.text + '</div>' +
            '<div class="chat-time">' + chat.time + '</div>' +
            '</div>' +
            '</div>',
        typing_element = '<div class="chat-item chat-left chat-typing" style="display:none">' +
            '<div class="chat-details">' +
            '<div class="chat-text"></div>' +
            '</div>' +
            '</div>';

    var append_element = element;
    if (chat.type == 'typing') {
        append_element = typing_element;
    }

    if (chat.timeout > 0) {
        setTimeout(function () {
            target.find('.chat-content').append($(append_element).fadeIn());
        }, chat.timeout);
    } else {
        target.find('.chat-content').append($(append_element).fadeIn());
    }

    var target_height = 0;
    target.find('.chat-content .chat-item').each(function () {
        target_height += $(this).outerHeight();
    });
    setTimeout(function () {
        target.find('.chat-content').scrollTop(target_height, -1);
    }, 100);
    chat.onShow.call(this, append_element);
}