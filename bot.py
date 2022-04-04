import discord
from random import randrange

sad_words = ["sad", "depressed", "unhappy", "angry", "miserable"]

class MyClient(discord.Client):
    
    
    async def on_ready(self):
        print('Logged on as', self.user)

    async def on_message(self, message):
        
        # don't respond to ourselves
        if message.author == self.user:
            return

        if message.content == 'ping':
            await message.channel.send('pong')
            
        if message.content.startswith('Hallo'):
            msg = 'Hallo, {0.author.mention}, wie geht es dir?'.format(message)
            await message.channel.send(msg)
            
        if message.content == 'Hi bot':
            await message.channel.send('Hi Mensch!')
            
        if "wow" in message.content:
            await message.channel.send("oh wow")
            
        if message.content.startswith('bot'):
            msg = 'https://www.onlinesolutionsgroup.de/wp-content/uploads/giphy.gif'.format(message)
            await message.channel.send(msg)
            
        #Encouragement
        for i in range (len(sad_words)):
            if message.content == sad_words[i]:
                await message.channel.send("Sei nicht traurig!")
            
client = MyClient()
client.run('OTUyODcyNzczNDE0NDQ5MTUz.Yi8V7A.j0wN12sp_VxwZxd9fWlTTtiJMjo')
