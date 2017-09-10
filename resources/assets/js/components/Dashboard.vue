<template>
<v-container fluid grid-list-md>
    <v-layout row wrap>
      <v-flex md3 xs12 sm6
			  v-for="card in statCards"
			  :key="card.title">
        <v-card class="mr-1" grey darken-1 dark>
			<v-card-title primary-title>

				<div class="col-md-5">
					<v-icon dark x-large>{{card.icon}}</v-icon>
				</div>
				<div class="col-md-7">
					<p dark class="title">{{card.title}}</p>

					<p dark class="subheading">{{card.val}}</p>
				</div>
			</v-card-title>

			<v-card-actions>
				<v-spacer></v-spacer>
				<v-flex xs12>
					<v-btn dark flat class="right">
						More
						<v-icon dark class="ml-3">arrow_forward</v-icon>
					</v-btn>
				</v-flex>
			</v-card-actions>
        </v-card>
      </v-flex>
    </v-layout>

    <v-layout row wrap class="mt-3">
    <h5>Interns progress</h5>
    	<v-flex class="col-md-12">
    		<v-card>
	          <v-card-media height="300px" >
	            <v-container fill-height fluid>
	              <v-layout fill-height>
	                <v-flex xs12 align-end flexbox>
	                  <span class="headline white--text" v-text=""></span>
	                </v-flex>
	              </v-layout>
	            </v-container>
	          </v-card-media>
	          <v-card-actions class="white">
	            <v-spacer></v-spacer>
          </v-card-actions>
        </v-card>
    	</v-flex>
    </v-layout>
  </v-container>
</template>
<script>
  export default {
    data () {
      return {
        email: '',
        password: '',
        statCards: [
        	{ title: 'Interns', val: 585, icon: 'school' },
	        { title: 'Supervisors', val: 585, icon: 'person' },
	        { title: 'Programs', val: 585, icon: 'dvr' },
	        { title: 'Requests', val: 585, icon: 'widgets' },
	      ],
      }
    }
    
  }
</script>
