# Work with Python 3.6
import discord
from random import randrange

TOKEN = ''

client = discord.Client()

@client.event
async def on_message(message):
    # we do not want the bot to reply to itself
    if message.author == client.user:
        return

    if message.content.startswith('Hallo'):
        msg = 'Hallo, {0.author.mention}, wie geht es dir?'.format(message)
        await message.channel.send(msg)
        
    if message.content == 'ping':
            await message.channel.send('pong')
            
    if message.content == 'Hi bot':
        await message.channel.send('Hi Mensch!')
        
    if "wow" in message.content:
        await message.channel.send("oh wow")
        

@client.event
async def on_message(message):
    # we do not want the bot to reply to itself
    if message.author == client.user:
        return
    randzahl = randrange(9999)
    if message.content.startswith('bot'):
        msg = 'https://www.onlinesolutionsgroup.de/wp-content/uploads/giphy.gif'.format(message)
        await message.channel.send(msg) 
        
            
@client.event
async def on_ready():
    print('Logged in as')
    print(client.user.name)
    print(client.user.id)
    print('------')

client.run(TOKEN)
