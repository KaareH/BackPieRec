##!/usr/bin/env bash

record() {
    echo "Recording" >&2
    
    AUDIODEV=hw:1 /usr/bin/rec -c 2 html/data/$1 & echo $! >> /tmp/audio_record.lock/rec.pid
    AUDIODEV=hw:1 /usr/bin/play /var/www/html/resources/audio/start.wav
    wait
    AUDIODEV=hw:1 /usr/bin/play /var/www/html/resources/audio/stop.wav
    echo "Recording stopped"
    rm -rf /tmp/audio_record.lock
    exit 0
}

if [ -z "$1" ]; then
    echo "Please provide a file name"
    exit 1
fi

if ! mkdir /tmp/audio_record.lock 2>/dev/null; then
    echo "Already recording" >&2
    exit 1
else
    record "$1" &>/dev/null & disown
    exit 0
fi
