//vue js
new Vue({
  el: "#vue",

  created() {
    this.doubleUp()
  },

  data() {
    return {
      loading: true,
      imagesLimit: 6,
      allLoaded: false,
      liveSearchString: '',
      images: [
        {
          id: 1,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/surfers.jpg',
          name: 'Subway Surfers',
          description: 'Subway Surfers is an endless runner game.',
          category: 'Math',
          modal_id : 'm1',
          modal_url: 'https://subwaysurf.co/subway-surfers-zurich.play'
        },

        {
          id: 3,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/temp2.jpg',
          name: 'Temple Run 2',
          description: 'Temple Run 2 is an endless running video game developed and published by Imangi Studios.',
          category: 'English',
          modal_id : 'm3',
          modal_url: 'https://html5.gamemonetize.com/pkyyuilfrqkcdnmrxsg60j22ypk0peje/'
        },
        {
          id: 5,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/megas.jpeg',
          name: 'Mega City Missions',
          description: 'Mega City Missions plays like a 2-player car driving stunt simulation game with 3D modern game art animations',
          category: 'Life Skills',
          modal_id : 'm5',
          modal_url: 'https://html5.gamedistribution.com/ede9baac2e744ce99147f47008f8d6dd/'
        },
        {
          id: 6,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/color.jpg',
          name: 'Coloring Walfs',
          description: '',
          category: 'English',
          modal_id : 'm6',
          modal_url: 'https://html5.gamedistribution.com/27fca4287cec49959f5859f6313da19d/'
        },
        {
          id: 4,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/hungrys.jpeg',
          name: 'Hungry Shark Arena',
          description: 'Hungry Shark Arena is a shark battle royale game that takes you on a vicious underwater war for supremacy.',
          category: 'Math',
          modal_id : 'm4',
          modal_url: 'https://html5.gamedistribution.com/1afba37790cf4c9696e6e6496f3a180d/'
        },
        {
          id: 7,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/police.jpg',
          name: 'Police Drift and Stunt',
          description: 'Drive a police car in this very mass simulator! Explore the city the way you like it best ... ',
          category: 'Fun',
          modal_id : 'm7',
          modal_url: 'https://html5.gamedistribution.com/2d26c9a25ba54b7fb0a843d28104f58d/'
        }

        ,
        {
          id: 2,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/pizza.jpg',
          name: 'Math Slither',
          description: 'Pizza Division is a timed puzzle game. In Pizza Division you must cut a pizza into the desired amount of slices and all of the slices must be of a uniform size. You will be scored on your accuracey and on your speed. Lots of pizza\'s isn\'t neccesarily good if they aren\'t accurate an d perfecgtly accurate cuts aren\'t important if you only manage to get one or two done. You must always be working on both skills at once, the synergy of the two skills will come together and create beautiful high scores.',
          category: 'Math',
          modal_id : 'm2',
          modal_url: 'https://cdn.mathgames.com/content/math-slither-1p/index.html?uid=60fc0585954f0201009dad41&curriculum_key=CC'

        }
      ]
    }
  },

  computed: {
    truncatedFilteredImages() {
      if(this.liveSearchString.trim().length > 0) {
        return this.images.filter((image) => {
          let parts = this.liveSearchString.trim().split(" ");

          for(let part of parts) {
            let searchRegex = new RegExp(part, 'i');

            if(!(
              searchRegex.test(image.name) ||
              searchRegex.test(image.description) ||
              searchRegex.test(image.category)
            )) {
              return false;
            }
          }

          return true;
        })
      } else {
        return this.images.slice(0,this.imagesLimit)
      }
    }
  },

  filters: {
    truncateText: (text) => {
      if(text.length > 60) {
        text = text.substring(0, 125) + "...";
      }

      return text;
    }
  },

  methods: {
    stopVideo(id){
      var src = $('#'+id).attr('src');
      $('#'+id).attr('src','');
      //$('#'+id).attr('src',src);

    },
    startVideo(id,url){
      //var src = $('#'+id).attr('src');
      //$('#'+id).attr('src','');
      $('#'+id).attr('src',url);

    },
    doubleUp() {
      //fake a bunch of data
      let localImages = JSON.parse(JSON.stringify(this.images))

      localImages.forEach((image) => {
        let newImage = image
        newImage.id  = image.id * 2
        //this.images.push(newImage)
      })

      setTimeout(() => {
        this.loading = false
        //then run replacePleaceholders
        this.replacePlaceholders()
      }, 200)


    },

    replacePlaceholders() {
      this.images.forEach((image, i) => {
        let newImg = document.createElement("img")
        newImg.src = image.bigUrl
        newImg.id = "preload-" + i
        document.getElementById("imageLoaderDock").appendChild(newImg)

        document.getElementById("preload-" + i).onload = () => {
          this.images[i].url = image.bigUrl
        }
      })
    },

    showMore() {
      this.imagesLimit += 6

      if(this.imagesLimit >= this.images.length) {
        this.imagesLimit = this.images.length
        this.allLoaded = true
      }
    }
  }
})
