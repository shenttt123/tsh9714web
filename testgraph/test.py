import plotly.express as px
experience_dict = {'Programming Language': ['Excel', 'Python', 'Tableau', 'R', 'Bash', 'PowerShell'], 'Years of Experience (As of April 2022)': [8,4,3,2,1,1]}

fig = px.bar(experience_dict, x='Programming Language', y='Years of Experience (As of April 2022)',color_discrete_sequence=["white"])

fig.update_layout(
    paper_bgcolor = "rgba(0,0,0,0)",
    plot_bgcolor = "rgba(0,0,0,0)",
    font_color = 'white',
    font_family = 'verdana',
    font_size = 20,
    )
fig.write_html("skills.html")