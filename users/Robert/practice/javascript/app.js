class Game {
  constructor(name, players) {
    this.name = name;
    this.players = players;
  }
}

class VideoGame extends Game {
  constructor(name, players, developer, releaseYear, platforms) {
    super(name, players);

    this.developer = developer;
    this.releaseYear = releaseYear;
    this.platforms = platforms;
  }

  getInfos() {
    console.log(
      `${this.name} can support up to ${this.players} players. It was developed by ${this.developer} and was released in ${this.releaseYear}.`
    );
  }

  supportedPlatforms() {
    console.log(`Supported platforms are: ${this.platforms.toString()}.`);

  }
}

const europaUniversalis = new VideoGame("Europa Universalis 4", 4, 'Paradox Interactive', 2013, ['Microsoft Windows', 'Linux', 'OS X']);
europaUniversalis.getInfos();
europaUniversalis.supportedPlatforms();
