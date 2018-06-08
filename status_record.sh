##!/usr/bin/env bash
if ! mkdir /tmp/audio_record.lock 2>/dev/null; then
    echo "on" >&2
    exit 0
else
    rm -rf /tmp/audio_record.lock
    echo "off" >&2
    exit 0
fi
