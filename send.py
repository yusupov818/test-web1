from telegram.ext import Updater

def get_chat_id(update, context):
    chat_id = update.message.chat_id
    print(chat_id)  # или можно отправить chat_id боту при помощи context.bot.send_message()

updater = Updater(token='6619057216:AAGfdxdAXKNJIu8JrDlvJlrbZVJK1AHTNTI', use_context=True)
updater.dispatcher.add_handler(MessageHandler(Filters.text & (~Filters.command), get_chat_id))

updater.start_polling()