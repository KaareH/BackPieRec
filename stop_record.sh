##!/usr/bin/env bash
if ! mkdir /tmp/audio_record.lock 2>/dev/null; then
    echo "Stopping recording." >&2

    FILE=/tmp/audio_record.lock/rec.pid
    while read LINE; do
         kill $LINE
    done < $FILE
    exit 0
else
    rm -rf /tmp/audio_record.lock
    echo "No recording to stop" >&2
    exit 1
fi
