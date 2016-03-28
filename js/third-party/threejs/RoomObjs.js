"use strict";

class Room{
	constructor(id, image, name)
	{
		"use strict";
		this.id = id;
		this.image = image;
		this.name = name;
		this.links = new Array();
		this.featureBubbles = new Array();
	}
}

class RoomLink{
	constructor(id,theta,phi)
	{
		this.toId = id;
		this.theta = theta;
		this.phi = phi;
		this.linkSprite = null;
		this.HighlightedLinkSprite = null;
	}
}

class FeatureBubble
{
	constructor(id, theta, phi, informationText)
	{
		this.id = id;
		this.theta = theta;
		this.phi = phi;
		this.informationText = informationText;
		this.backgroundSprite = null;
		this.indicatorSprite = null;
		this.isOpen = false;
	}
}
