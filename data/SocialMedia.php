<?php

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia
{
}

class FakeSocialMedia extends Facebook
{
}
