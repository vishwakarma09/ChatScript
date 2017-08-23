.PHONY = clean binary server debugserver standalone pgserver debugpgserver mongoserver debugmongoserver foreignserver mongotreetaggerserver 

# store executable names in make variables so that clean target works

executable.server=../BINARIES/ChatScript
server: DEFINES+= -DLOCKUSERFILE=1  -DEVSERVER=1 -DEVSERVER_FORK=1  -DDISCARDPOSTGRES=1 -DDISCARDMONGO=1 -DDISCARDMYSQL=1 
server: PGLOAD= -pthread
server: INCLUDEDIRS=-Ievserver
server: binary
server: EXECUTABLE=$(executable.server)
server: CFLAGS=-c  -std=c++11 -Wall  -funsigned-char  -Wno-write-strings -Wno-char-subscripts -Wno-strict-aliasing 

executable.debugserver=../BINARIES/ChatScriptDebug
debugserver: DEFINES+= -DLOCKUSERFILE=1 -DDISCARDPOSTGRES=1 -DDISCARDMONGO=1 -DDISCARDMYSQL=1  -DDEBUG -DEVSERVER=1 -DEVSERVER_FORK=1 
debugserver: PGLOAD= -pthread
debugserver: INCLUDEDIRS=-Ievserver
debugserver: binary
debugserver: EXECUTABLE=$(executable.debugserver)
debugserver: CFLAGS=-c -std=c++11 -Wall  -funsigned-char  -Wno-write-strings -Wno-char-subscripts -Wno-strict-aliasing -g

executable.standalone=../BINARIES/ChatScript
standalone: DEFINES+=  -DDISCARDSERVER=1 -DDISCARDPOSTGRES=1 -DDISCARDMONGO=1 -DDISCARDMYSQL=1 -DEVSERVER=1 -DEVSERVER_FORK=1
standalone: PGLOAD= -pthread
standalone: INCLUDEDIRS=-Ievserver
standalone: binary
standalone: EXECUTABLE=$(executable.standalone)
standalone: CFLAGS=-c -std=c++11  -Wall  -funsigned-char  -Wno-write-strings -Wno-char-subscripts -Wno-strict-aliasing 

executable.pgserver=../BINARIES/ChatScriptpg
pgserver: DEFINES+= -DLOCKUSERFILE=1 -DEVSERVER=1 -DEVSERVER_FORK=1 -DDISCARDMONGO=1 -DDISCARDMYSQL=1
pgserver: PGLOAD= -lpq -pthread
pgserver: binary
pgserver: EXECUTABLE=$(executable.pgserver)
pgserver: INCLUDEDIRS=-Ievserver -Ipostgres
pgserver: CFLAGS=-c -std=c++11 -Wall  -funsigned-char  -Wno-write-strings -Wno-char-subscripts -Wno-strict-aliasing 

executable.debugpgserver=../BINARIES/ChatScriptpgDebug
debugpgserver: DEFINES+= -DLOCKUSERFILE=1  -DDEBUG -DEVSERVER=1 -DEVSERVER_FORK=1  -DDISCARDMONGO=1  
debugpgserver: PGLOAD= -lpq -pthread
debugpgserver: INCLUDEDIRS=-Ievserver
debugpgserver: binary
debugpgserver: EXECUTABLE=$(executable.debugpgserver)
debugpgserver: CFLAGS=-c -std=c++11 -Wall  -funsigned-char  -Wno-write-strings -Wno-char-subscripts -Wno-strict-aliasing -g

executable.mongoserver=../BINARIES/ChatScriptMongo
mongoserver: DEFINES+= -DLOCKUSERFILE=1 -DEVSERVER=1 -DEVSERVER_FORK=1 -DDISCARDPOSTGRES=1 -DDISCARDMYSQL=1
mongoserver: PGLOAD= -pthread
mongoserver: binary
mongoserver: EXECUTABLE=$(executable.mongoserver)
mongoserver: INCLUDEDIRS=-Iinclude -I/usr/local/include/libbson-1.0 -I/usr/local/include/libmongoc-1.0
mongoserver: CFLAGS=-c -std=c++11  -Wall  -funsigned-char  -Wno-write-strings -Wno-char-subscripts -Wno-strict-aliasing -g

executable.debugmongoserver=../BINARIES/ChatScriptMongoDebug
debugmongoserver: DEFINES+= -DLOCKUSERFILE=1  -DDEBUG -DEVSERVER=1 -DEVSERVER_FORK=1  -DDISCARDPOSTGRES=1  -DDISCARDMYSQL=1
debugmongoserver: PGLOAD= -lpq -pthread
debugmongoserver: binary
debugmongoserver: INCLUDEDIRS=-Iinclude -I/usr/local/include/libbson-1.0 -I/usr/local/include/libmongoc-1.0
debugmongoserver: EXECUTABLE=$(executable.debugmongoserver)
debugmongoserver: CFLAGS=-c -std=c++11 -Wall  -funsigned-char  -Wno-write-strings -Wno-char-subscripts -Wno-strict-aliasing -g

executable.foreignserver=../BINARIES/ChatScriptForeign
foreignserver: DEFINES+= -DLOCKUSERFILE=1  -DEVSERVER=1 -DEVSERVER_FORK=1  -DDISCARDPOSTGRES=1 -DDISCARDMONGO=1 -DDISCARDMYSQL=1 -DTREETAGGER=1
foreignserver: PGLOAD= -pthread -L../treetagger -L../BINARIES -ltreetagger
foreignserver: INCLUDEDIRS=-Ievserver
foreignserver: binary
foreignserver: EXECUTABLE=$(executable.foreignserver)
foreignserver: CFLAGS=-c -std=c++11 -Wall  -funsigned-char  -Wno-write-strings -Wno-char-subscripts -Wno-strict-aliasing 

executable.mongotreetaggerserver=../BINARIES/ChatScriptMongoForeign
mongotreetaggerserver: DEFINES+= -DLOCKUSERFILE=1  -DEVSERVER=1 -DEVSERVER_FORK=1  -DDISCARDPOSTGRES=1  -DDISCARDMYSQL=1 -DTREETAGGER=1
mongotreetaggerserver: PGLOAD= -pthread -L../treetagger -L../BINARIES -ltreetagger
mongotreetaggerserver: INCLUDEDIRS=-Iinclude -I/usr/local/include/libbson-1.0 -I/usr/local/include/libmongoc-1.0
mongotreetaggerserver: binary
mongotreetaggerserver: EXECUTABLE=$(executable.mongotreetaggerserver)
mongotreetaggerserver: CFLAGS=-c -std=c++11 -Wall  -funsigned-char  -Wno-write-strings -Wno-char-subscripts -Wno-strict-aliasing 

UNAME := $(shell uname)

CC=g++

ifeq ($(UNAME), Linux)
$(info ************ LINUX VERSION ************)
LDFLAGS= -L/usr/lib64 -lrt -lcurl  --verbose $(PGLOAD)
mongoserver: LDFLAGS+= -lcrypt -lsasl2 -L/usr/local/lib -lmongoc-1.0 -lbson-1.0 
debugmongoserver: LDFLAGS+= -lcrypt -lsasl2 -L/usr/local/lib -lmongoc-1.0 -lbson-1.0 
mongotreetaggerserver: LDFLAGS+= -lcrypt -lsasl2 -L/usr/local/lib -lmongoc-1.0 -lbson-1.0 
endif

ifeq ($(UNAME), Darwin)
OSXRELEASE := $(shell defaults read loginwindow SystemVersionStampAsString)
$(info ************ MAC VERSION $OSXRELEASE detected ************)
LDFLAGS=-mmacosx-version-min=$(OSXRELEASE) -lcurl $(PGLOAD)  
CFLAGS=-mmacosx-version-min=$(OSXRELEASE) -c  -Wall  -funsigned-char -Wno-write-strings -Wno-char-subscripts 
endif

ifeq ($(UNAME), FreeBSD)
$(info ************ FREEBSD VERSION ************)
DEFINES+= -DFREEBSD=1
INCLUDEDIRS+= -I/usr/local/include
LDFLAGS= -L/usr/local/lib -lrt -lcurl -lev  --verbose $(PGLOAD)
mongoserver: LDFLAGS+= -lgcrypt -lsasl2 -lmongoc-1.0 -lbson-1.0 
debugmongoserver: LDFLAGS+= -lgcrypt -lsasl2 -lmongoc-1.0 -lbson-1.0 
mongotreetaggerserver: LDFLAGS+= -lgcrypt -lsasl2 -lmongoc-1.0 -lbson-1.0 
endif

SOURCES=constructCode.cpp duktape/duktape.c evserver.cpp csocket.cpp cs_ev.c dictionarySystem.cpp englishTagger.cpp factSystem.cpp json.cpp functionExecute.cpp english.cpp infer.cpp javascript.cpp jsmn.cpp markSystem.cpp mongodb.cpp os.cpp outputSystem.cpp patternSystem.cpp postgres.cpp privatesrc.cpp scriptCompile.cpp spellcheck.cpp secure.cpp systemVariables.cpp tagger.cpp testing.cpp textUtilities.cpp tokenSystem.cpp topicSystem.cpp userCache.cpp userSystem.cpp variableSystem.cpp mainSystem.cpp 
OBJECTS=$(SOURCES:.cpp=.o)

# all target does make sense since each build target requires a different set of defines
# so we need to clean before building each target in order compile the right stuff

default: server

clean:
	-rm -f *.o
	-rm -f $(executable.server)
	-rm -f $(executable.debugserver)
	-rm -f $(executable.standalone)
	-rm -f $(executable.pgserver)
	-rm -f $(executable.debugpgserver)
	-rm -f $(executable.mongoserver)
	-rm -f $(executable.debugmongoserver)
	-rm -f $(executable.foreignserver)
	-rm -f $(executable.mongotreetaggerserver)

binary: $(OBJECTS)
	$(CC) $(OBJECTS) $(LDFLAGS) $(DEFINES) $(INCLUDEDIRS) -o $(EXECUTABLE)

.cpp.o:
	$(CC) $(CFLAGS) $(DEFINES) $(INCLUDEDIRS) $< -o $@
