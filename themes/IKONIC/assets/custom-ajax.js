
var siteDomainURL = window.location.protocol + '//' + window.location.hostname + (window.location.port ? ':' + window.location.port : '');

var projectsApiURL = siteDomainURL +'/IKONIC/wp-json/IkONIC/last-projects';
console.log("HREF : "+projectsApiURL);

fetch(projectsApiURL)
    .then(response => response.json())
    .then(data => {
        if (data.success) 
        {
            const ajaxEndpointProjects = document.querySelector("#courses .course_box");
            if (ajaxEndpointProjects) 
            {
                ajaxEndpointProjects.innerHTML = generateHTML(data.data);
            }
        } 
        else 
        {
            console.error('Error fetching projects');
        }
    });


function generateHTML(data) {
    if (Array.isArray(data) && data.length > 0) {
        return data.map(post => `
                <a href="${post.link}">
                    <div class="category">
                        <p>${post.taxonomy}</p>
                    </div>
                    <div class="id"><p>${post.id}</p></div>
                    <div class="courses">
                        <img src='${post.thumbnail}'>
                        <div class="details">
                              <span>${post.publish_date}</span>
                              <h6>${post.title}</h6>
                              <p>${post.excerpt}</p>
                        </div>
                    </div>
                </a>
        `).join('');
    } else {
        return '<p>No posts found.</p>';
    }
}

  
          

