# ChatScript Wiki (user guides, tutorials, papers)
**ChatScript Guide To Documentation**
© Bruce Wilcox, mailto:gowilcox@gmail.com www.brilligunderstanding.com
<br>Revision 4/8/2017 cs7.31

ChatScript has a lot of documentation in various manuals, so knowing what to read may seem daunting.
Here is an overview.

## Basic ChatScript for starters

* [What is ChatScript?](OVERVIEWS-AND-TUTORIALS/What-is-ChatScript.html)
<br>Overview of the design goals and abilities of CS. Not necessary to read.

* [ChatScript Basic User Manual](ChatScript-Basic-User-Manual.html)
<br>This explains how to run CS, how to understand basic CS ideas like rules, topics, and
concepts. A must starting place.

* [ChatScript Tutorial](OVERVIEWS-AND-TUTORIALS/ChatScript-Tutorial.html)
<br>A briew step-by-step on creating a chatbot travel agent, written by a CS user.

* [ChatScript Memorization](ChatScript-Memorization.html)
<br>A simple explanation of how to “learn” data about the user.

* [ChatScript Common Beginner Mistakes](ChatScript-Common-Beginner-Mistakes.html)
<br>Here are a collection of common beginner mistakes.


## Predefined Bots

* [Bot Harry - basic bot](PREDEFINED-BOTS/Bot-Harry.html)
<br>A brief overview of the simple Harry bot and how to make simple modifications.
Potentially useful for a beginner read.

* [Bot NLTK – NL analysis bot](PREDEFINED-BOTS/Bot-NLTK.html)
<br>A brief description of how to run the NLTK bot. Not useful for most people, especially if
NLTK means nothing to you.

* [Bot Stockpile – planner bot](PREDEFINED-BOTS/Bot-Stockpile.html)
<br>A brief description of how to run the Stockpile bot. Not useful for most people. It's about planner capabilities of CS.

* [Bot Postgres – postgres bot](PREDEFINED-BOTS/Bot-Postgres.html)
<br>Illustration of using Postgres database.

* [Bot German](PREDEFINED-BOTS/Bot-German.html)
<br>An illustration of hooking in an external pos-tagger for foreign language support.


## Advanced ChatScript

* [ChatScript Advanced User Manual](ChatScript-Advanced-User-Manual.html)
<br>Once you've master basic CS, this is the place to go next.

* [ChatScript System Functions Manual](ChatScript-System-Functions-Manual.html)
<br>A listing of all the functions of CS.

* [ChatScript Fact Manual](ChatScript-Fact-Manual.html)
<br>A discussion of how to manipulate facts in CS.

* [ChatScript Json](ChatScript-Json.html)
<br>ChatScript support for Json

* [ChatScript Overview Input to Output](ChatScript-Overview-of-Input-to-Output.html)
<br>An overview of the process of converting input to output. Not necessary except for
really advanced users wanting the appropriate mental model.

* [ChatScript Pattern Redux](ChatScript-Pattern-Redux.html)
<br>A terse but detailed look at everything involving rule patterns.

* [ChatScript System Variables and Engine-defined Concepts](ChatScript-System-Variables-and-Engine-defined-Concepts.html)
<br> Engine-defined Concepts. System Variables. Control over Input. Interchange Variables.

* [ChatScript Command Line Parameters](ChatScript-Command-Line-Parameters.html)
<br> Command line parameters details and usage.

* [ChatScript Multiple Bots](ChatScript-Multiple-Bots.html)
<br> How to control multiple bots in a single server.

* [Installing and Updating ChatScript](Installing-and-Updating-ChatScript.html)
<br>Installing on Windows, Mac, Linux. Updating ChatScript (advanced).


## Test and Debug

* [ChatScript Finalizing a Bot](ChatScript-Finalizing-A-Bot.html)
<br>Once you have built a bot, how to polish it and make sure it is “ready”. A bot will likely
never be complete because you will want to keep improving it.

* [ChatScript Testing Manual](ChatScript-Debugging-Manual.html)
<br>The features of CS that support debugging, including tracing.

 * [ChatScript Debugger](ChatScript-Debugger.html)
<br>Built-in text oriented step debugger.


## Specialized ChatScript

* ### Servers and Clients

 * [ChatScript ClientServer Manual](CLIENTS-AND-SERVERS/ChatScript-ClientServer-Manual.html)
<br>How to configure and run CS as a server. And thinking about CS on mobile.

 * [ChatScript External Communications](CLIENTS-AND-SERVERS/ChatScript-External-Communications.html)
<br> How to embedding ChatScript inside another main program, calling programs on the OS from ChatScript, and getting services via the Internet from ChatScript.

 * [ChatScript Amazon Server](CLIENTS-AND-SERVERS/ChatScript-Amazon-Server.html)
<br>How to install CS as a server on Amazon AWS.


* ### Esoteric ChatScript

 * [ChatScript Control Scripts](ESOTERIC-CHATSCRIPT/ChatScript-Control-Scripts.html)
<br>Brief overview of writing your own control scripts

 * [ChatScript Analytics](ESOTERIC-CHATSCRIPT/ChatScript-Analytics-Manual.html)
<br>Debug functions that can dissect log files.

 * [ChatScript Document Reader](ESOTERIC-CHATSCRIPT/ChatScript-Document-Reader.html)
<br>How to use CS to acquire information from a document.

 * [ChatScript Javascript](ESOTERIC-CHATSCRIPT/ChatScript-Javascript.html)
<br>How to write outputmacros in Javascript and call them.

 * [ChatScript Mongo](ESOTERIC-CHATSCRIPT/ChatScript-MongoDB.html)
<br>How to use the Mongo db directly from CS

 * [ChatScript Planning](ESOTERIC-CHATSCRIPT/ChatScript-Planning.html)
<br>How to use CS as an HTN (hierarchical task network) planner.

 * [ChatScript PosParser](ESOTERIC-CHATSCRIPT/ChatScript-PosParser.html)
<br>How to use grammar/parsing in CS patterns.

 * [ChatScript PostgreSQL](ESOTERIC-CHATSCRIPT/ChatScript-PostgreSQL.html)
<br>How to use the Postgres database directly from CS.

 * [ChatScript Exotica](ESOTERIC-CHATSCRIPT/ChatScript-Exotica-Examples.html)
<br>Brief old interesting scripting tips

 * [ChatScript Foreign Languages](ESOTERIC-CHATSCRIPT/ChatScript-Foreign-Languages.html)
<br>Running CS in a language other than English.

 * [ChatScript Engine](ESOTERIC-CHATSCRIPT/ChatScript-Engine.html)
<br>How the internals of the engine work and how to extend it with private code.


## Papers in order

* [Paper - ChatBots 102](../PAPERS/Paper-%20ChatBots%20102.pdf)
<br>My first paper, looking at the flaws of AIML and why I felt I could do better (before Suzette won anything).

* [Paper - Pattern Matching for Natural Language](PAPERS/Paper-Pattern-Matching-for-Natural-Language-Applications.html)
<br>Compares CS, AIML, and Facade

* [Paper - Suzette The Most Human Computer](PAPERS/Suzette-The-Most-Human-Computer.html)
<br>How our first chatbot came about, won the Loebner's, and differed from AIML.

* [Paper - Speaker for the Dead](../PAPERS/Paper-%20Speaker%20for%20theDead.pdf)
<br>Applying chatbots to manage people's accumulations of papers, photos, etc.

* [Paper - Google Talk](PAPERS/Paper-Google-Talk.html)
<br>A talk I gave at Google about my history, CS, and writing code to act out stories

* [Paper - Writing a Chatbot](PAPERS/Writing-a-Chatbot.html)
<br>Useful discussion on how to think about writing a chatbot

* [Paper - ARBOR_ MakingItReal](PAPERS/Paper-ARBOR-MakingItReal.html)
<br>Useful discussion on how to think about writing a chatbot

* [Paper - Winning 15 Minute Conversation](../PAPERS/Paper-%20Winning%2015%20Minute%20Conversation.pdf)
<br>The conversation (1 of 2) that had our chatbot easily win best 15 minute conversation at ChatBot Battles 2012.

* [Paper - Winning the Loebner's](PAPERS/Paper%20-%20WinningTheLoebners.html)
<br>Realities of the Loebner competition and additional ideas of english applied to chatbots

* [ChatScript Training](PAPERS/ChatScript-Training.html)
<br>A slide series on how CS works and how the engine works.
