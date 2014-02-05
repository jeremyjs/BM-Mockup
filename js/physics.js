function init() {

    // Box2D Vars
    var b2Vec2 = Box2D.Common.Math.b2Vec2,
        b2BodyDef = Box2D.Dynamics.b2BodyDef,
        b2Body = Box2D.Dynamics.b2Body,
        b2FixtureDef = Box2D.Dynamics.b2FixtureDef,
        b2World = Box2D.Dynamics.b2World,
        b2PolygonShape = Box2D.Collision.Shapes.b2PolygonShape,
        b2CircleShape = Box2D.Collision.Shapes.b2CircleShape,
        b2DebugDraw = Box2D.Dynamics.b2DebugDraw,
        b2RevoluteJointDef = Box2D.Dynamics.Joints.b2RevoluteJointDef,
        worldScale = 30
        ;

    var world = new b2World(new b2Vec2(0, 8), true); // define world
    var fixDef = new b2FixtureDef;
    fixDef.density = 0.5;
    fixDef.friction = 1.0;
    fixDef.restitution = 0.5;

    var bodyDef = new b2BodyDef;

    //create ground
    bodyDef.type = b2Body.b2_staticBody;
    fixDef.shape = new b2PolygonShape;
    fixDef.shape.SetAsBox(30, 3);
    bodyDef.position.Set(20, 732 / 28 + 1.8);
    bodyDef.userData = 'theKiller';
    world.CreateBody(bodyDef).CreateFixture(fixDef);
    //bodyDef.position.Set(30, -1.8);
    world.CreateBody(bodyDef).CreateFixture(fixDef);
    fixDef.shape.SetAsBox(2, 14);
    //bodyDef.position.Set(-1.8, 17);
    //world.CreateBody(bodyDef).CreateFixture(fixDef);
    //bodyDef.position.Set(41.8, 17);
    //world.CreateBody(bodyDef).CreateFixture(fixDef);

    /* ------- Pixels --------- */
    // bitmap pixels to be sent to box2d

    var thePixel = new Array();

    bodyDef.type = b2Body.b2_dynamicBody;
    for(var i = 0; i < 5; ++i) {
        fixDef.shape = new b2PolygonShape;
        fixDef.shape.SetAsBox(
            0.2 //half width
            ,  0.2 //half height
        );

        bodyDef.position.x = Math.random() * 45;
        bodyDef.position.y = Math.random() * 0;
        bodyDef.userData = 'images/pixel-bb.png'; // Location of Image set as User Data
        thePixel[i] = world.CreateBody(bodyDef)
        thePixel[i].CreateFixture(fixDef);
    }

    createCog();

    //setup debug draw
    var debugDraw = new b2DebugDraw();
    debugDraw.SetSprite(document.getElementById("canvas").getContext("2d"));
    debugDraw.SetDrawScale(30.0);
    debugDraw.SetFillAlpha(1);
    debugDraw.SetLineThickness(0.0);
    debugDraw.SetFlags(b2DebugDraw.e_shapeBit);
    world.SetDebugDraw(debugDraw);

    window.setInterval(update, 1000 / 60);

    function createCog() {

        var pY1 = 206,
            pY2 = 340,
            pY3 = 500,
            pX1 = 774,
            pX2 = 300,
            pX3 = 970,
            r1 = 112,
            r2 = 82,
            r3 = 65,
            cogSize1 = 32,
            cogSize2 = 25,
            cogSize3 = 18 ,
            nCogs1 = 13,
            nCogs2 = 10,
            nCogs3 = 10,
            motorSpeed1 = 1,
            motorSpeed2 = 1,
            motorSpeed3 = 1;


        // CREATE COG #1
        var fixtureDef = new b2FixtureDef();
        fixtureDef.restitution=0;
        fixtureDef.density=1;
        var circleShape = new b2CircleShape(r1 / worldScale);
        fixtureDef.shape=circleShape;
        var bodyDef = new b2BodyDef();
        bodyDef.userData = 'images/gear-med-c.png'; // Location of Image set as User Data
        bodyDef.position.Set(pX1 / worldScale,pY1 / worldScale);

        bodyDef.type=b2Body.b2_dynamicBody;
        theCog1=world.CreateBody(bodyDef);
        theCog1.CreateFixture(fixtureDef);
        var polygonShape = new b2PolygonShape();

        for (var i=0; i<nCogs1; i++) {
            var angle = 2 * Math.PI / nCogs1 * i;
            polygonShape.SetAsOrientedBox(cogSize1 / worldScale / 2, cogSize1 / worldScale / 2, new b2Vec2(r1 * Math.cos(angle) / worldScale, r1 * Math.sin(angle) / worldScale), angle);
            fixtureDef.shape=polygonShape;
            theCog1.CreateFixture(fixtureDef);
        }

        var containerJoint = new b2RevoluteJointDef();
        var anchorA = new b2Vec2(0,0)
        var anchorB = new b2Vec2(pX1/worldScale,pY1/worldScale)
        containerJoint.localAnchorA.Set(anchorA.x, anchorA.y);
        containerJoint.localAnchorB.Set(anchorB.x, anchorB.y);
        containerJoint.bodyA = theCog1;
        containerJoint.bodyB = world.GetGroundBody();
        containerJoint.enableMotor = true;
        containerJoint.maxMotorTorque = 50000;
        containerJoint.motorSpeed = motorSpeed1;
        world.CreateJoint(containerJoint);


        // CREATE COG #2
        var fixtureDef = new b2FixtureDef();
        fixtureDef.restitution=0;
        fixtureDef.density=1;
        var circleShape = new b2CircleShape(r2 / worldScale);
        fixtureDef.shape=circleShape;
        var bodyDef = new b2BodyDef();
        bodyDef.userData = 'images/gear-large-c.png'; // Location of Image set as User Data
        bodyDef.position.Set(pX2 / worldScale,pY2 / worldScale);

        bodyDef.type=b2Body.b2_dynamicBody;
        theCog2=world.CreateBody(bodyDef);
        theCog2.CreateFixture(fixtureDef);
        var polygonShape = new b2PolygonShape();

        for (var i=0; i<nCogs2; i++) {
            var angle = 2 * Math.PI / nCogs2 * i;
            polygonShape.SetAsOrientedBox(cogSize2 / worldScale / 2, cogSize2 / worldScale / 2, new b2Vec2(r2 * Math.cos(angle) / worldScale, r2 * Math.sin(angle) / worldScale), angle);
            fixtureDef.shape=polygonShape;
            theCog2.CreateFixture(fixtureDef);
        }

        var containerJoint = new b2RevoluteJointDef();
        var anchorA = new b2Vec2(0,0)
        var anchorB = new b2Vec2(pX2/worldScale,pY2/worldScale)
        containerJoint.localAnchorA.Set(anchorA.x, anchorA.y);
        containerJoint.localAnchorB.Set(anchorB.x, anchorB.y);
        containerJoint.bodyA = theCog2;
        containerJoint.bodyB = world.GetGroundBody();
        containerJoint.enableMotor = true;
        containerJoint.maxMotorTorque = 50000;
        containerJoint.motorSpeed = motorSpeed2;
        world.CreateJoint(containerJoint);


        // CREATE COG #3
        var fixtureDef = new b2FixtureDef();
        fixtureDef.restitution=0;
        fixtureDef.density=1;
        var circleShape = new b2CircleShape(r3 / worldScale);
        fixtureDef.shape=circleShape;
        var bodyDef = new b2BodyDef();
        bodyDef.userData = 'images/gear-small-c.png'; // Location of Image set as User Data
        bodyDef.position.Set(pX3 / worldScale,pY3 / worldScale);

        bodyDef.type=b2Body.b2_dynamicBody;
        theCog3=world.CreateBody(bodyDef);
        theCog3.CreateFixture(fixtureDef);
        var polygonShape = new b2PolygonShape();

        for (var i=0; i<nCogs3; i++) {
            var angle = 2 * Math.PI / nCogs3 * i;
            polygonShape.SetAsOrientedBox(cogSize3 / worldScale / 2, cogSize3 / worldScale / 2, new b2Vec2(r3 * Math.cos(angle) / worldScale, r3 * Math.sin(angle) / worldScale), angle);
            fixtureDef.shape=polygonShape;
            theCog3.CreateFixture(fixtureDef);
        }

        var containerJoint = new b2RevoluteJointDef();
        var anchorA = new b2Vec2(0,0)
        var anchorB = new b2Vec2(pX3/worldScale,pY3/worldScale)
        containerJoint.localAnchorA.Set(anchorA.x, anchorA.y);
        containerJoint.localAnchorB.Set(anchorB.x, anchorB.y);
        containerJoint.bodyA = theCog3;
        containerJoint.bodyB = world.GetGroundBody();
        containerJoint.enableMotor = true;
        containerJoint.maxMotorTorque = 50000;
        containerJoint.motorSpeed = motorSpeed3;
        world.CreateJoint(containerJoint);
    };

    var limbo = [];
    var listener = new Box2D.Dynamics.b2ContactListener;

    world.SetContactListener(listener);

    function update() {
		//console.log(limbo);
        for (var j in limbo) {		
			for(var pixel = 0; pixel < thePixel.length; ++pixel)
			{
				if(thePixel[pixel] == limbo[j])
				{
					//console.log("pixel = " + pixel);
					break;
				}
			}
			
            world.DestroyBody(limbo[j]);
			thePixel[pixel] = thePixel[thePixel.length - 1];
			thePixel = thePixel.slice(0, thePixel.length - 1);
			

			
        }

        limbo.length = 0;

        world.Step(1 / 60, 10, 10);
		
		if(Math.floor((Math.random()*10)+1) == 4)
		{
		
		var debugDraw = new b2DebugDraw();
		debugDraw.SetSprite(document.getElementById("canvas").getContext("2d"));
		debugDraw.SetDrawScale(30.0);
		debugDraw.SetFillAlpha(1);
		debugDraw.SetLineThickness(0.0);
		debugDraw.SetFlags(b2DebugDraw.e_shapeBit);
		world.SetDebugDraw(debugDraw);
		
		var bodyDef = new b2BodyDef;
		var fixDef = new b2FixtureDef;
		fixDef.density = 1.0;
		fixDef.friction = 0.5;
		fixDef.restitution = 0.2;
		fixDef.shape = new b2PolygonShape;
		fixDef.shape.SetAsBox(0.2,  0.2);
		bodyDef.type = b2Body.b2_dynamicBody;
		bodyDef.userData = 'images/pixel-bb.png';
		bodyDef.position.x = Math.random() * 50;
		bodyDef.position.y = Math.random() * 0;
		thePixel[thePixel.length] = world.CreateBody(bodyDef);
		thePixel[thePixel.length - 1].CreateFixture(fixDef);
		}
		

        $("canvas").clearCanvas();

        var angle1 = theCog1.GetAngle()*(180/Math.PI);

        $("canvas")
            .rotateCanvas({
                x: 300, y: 340,
                rotate: angle1
            })
            .drawImage({
                source: theCog1.GetUserData(),
                x: 300, y: 340,
                fromCenter: true
            })
            .restoreCanvas();

        var angle2 = theCog2.GetAngle()*(180/Math.PI);


        $("canvas")
            .rotateCanvas({
                x: 774, y: 206,
                rotate: angle2
            })
            .drawImage({
                source: theCog2.GetUserData(),
                x: 774, y: 206,
                fromCenter: true
            })
            .restoreCanvas();

        var angle3 = theCog3.GetAngle()*(180/Math.PI);

        $("canvas")
            .rotateCanvas({
                x: 970, y: 500,
                rotate: angle3
            })
            .drawImage({
                source: theCog3.GetUserData(),
                x: 970, y: 500,
                fromCenter: true
            })
            .restoreCanvas();

        for(var i = 0; i < thePixel.length; ++i) {
            var angle2 = thePixel[i].GetAngle()*(180/Math.PI);
            var pos2 = thePixel[i].GetPosition();

            // Using Images to display bodies
            if (thePixel[i].GetUserData() != 'cog2'){
                $("canvas")
                    .rotateCanvas({
                        x: pos2.x * 30, y: pos2.y * 30,
                        rotate: angle2
                    })
                    .drawImage({
                        source: thePixel[i].GetUserData(),
                        x: pos2.x * 30, y: pos2.y * 30,
                        fromCenter: true
                    })
                    .restoreCanvas();
            }

            listener.PostSolve = function(contact, impulse) {
				//console.log(thePixel[i]);
				//console.log(contact.GetFixtureA().GetBody());
                if (contact.GetFixtureA().GetBody().GetUserData() == 'images/pixel-bb.png' && contact.GetFixtureB().GetBody().GetUserData() == 'theKiller') {
                    limbo.push(contact.GetFixtureA().GetBody());
					//limbo.push(i);
                    //thePixel[i] = thePixel[thePixel.length - 1];
					//thePixel = thePixel.slice(0, thePixel.length - 1);
                }
            }
        }

        //world.DrawDebugData();

        world.ClearForces();
    }
}

