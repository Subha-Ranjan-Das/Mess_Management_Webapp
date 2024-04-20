<!DOCTYPE html>

<html>

  <head>

    <meta name = "viewport" content = "width=device-width">

    <title>Ball Bounce</title>

    <style>

      * { margin:0; padding:0; }

      canvas { height:100%; position:fixed; width:100%; }
      div{
            position: fixed;
            top: 40%;
            left: 25%;
            margin-top: -50px;
            margin-left: -100px;
            color: purple;
            font-size: 3em;
            font-family: cursive;
            background-color: rgba(255, 0, 0, 0.6);
            border-radius: 20px;
            /* height: 100px; */
            padding: 50px 30px 50px 30px;
            /* opacity: 0.5; */
        }
        button{
            border-radius: 5px;
            font-size: 30px;
            /* background-color: purple;
            color: yellow; */
        }
        #b1{
            position: fixed;
            left: 40%;
            /* left: 25%; */
        }
        #b2{
            position: fixed;
            right: 40%;
            /* left: 25%; */
        }

    </style>

  </head>

  <body>
  
    <canvas></canvas>
    <div>You Have Been Successfully Registered<br><br>&emsp;&emsp;&emsp;
        <button id="b1" ><a href="phpfront.html">Home </a></button>&emsp;&emsp;
        <button id="b2"><a href="studentlogin.html">Login</button>
    </div>

    <script type = "text/javascript">

      const Ball = function(x, y, radius) {

        this.color = "rgb(" + Math.floor(Math.random() * 256) + "," + Math.floor(Math.random() * 256) + "," + Math.floor(Math.random() * 256) + ")";
        this.direction = Math.random() * Math.PI * 2;
        this.radius = radius;
        this.speed = Math.random() * 3 + 1;
        this.x = x;
        this.y = y;

      };

      Ball.prototype = {

        updatePosition:function(width, height) {

          this.x += Math.cos(this.direction) * this.speed;
          this.y += Math.sin(this.direction) * this.speed;

          if(this.x - this.radius < 0) {

            this.x = this.radius;

            this.direction = Math.atan2(Math.sin(this.direction), Math.cos(this.direction) * -1);

          } else if (this.x + this.radius > width) {

            this.x = width - this.radius;

            this.direction = Math.atan2(Math.sin(this.direction), Math.cos(this.direction) * -1);

          }

          if(this.y - this.radius < 0) {

            this.y = this.radius;

            this.direction = Math.atan2(Math.sin(this.direction) * -1, Math.cos(this.direction));

          } else if (this.y + this.radius > height) {

            this.y = height - this.radius;

            this.direction = Math.atan2(Math.sin(this.direction) * -1, Math.cos(this.direction));

          }

        }

      };

      var context = document.querySelector("canvas").getContext("2d");

      var balls = new Array();

      let x = document.documentElement.clientWidth * 0.5;
      let y = document.documentElement.clientHeight * 0.5;

      for(let index = 0; index < 50; index ++) {

        balls.push(new Ball(x, y, Math.floor(Math.random() * 10 + 20)));

      }

      function loop() {

        window.requestAnimationFrame(loop);

        let height = document.documentElement.clientHeight;
        let width  = document.documentElement.clientWidth;

        context.canvas.height = height;
        context.canvas.width = width;

        for(let index = 0; index < balls.length; index ++) {

          let ball = balls[index];

          context.fillStyle = ball.color;
          context.beginPath();
          context.arc(ball.x, ball.y, ball.radius, 0, Math.PI * 2);
          context.fill();

          ball.updatePosition(width, height);

        }

      }

      loop();

    </script>

  </body>

</html>